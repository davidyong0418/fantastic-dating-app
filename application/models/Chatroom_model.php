<?php
class chatroom_model extends CI_Model 
{
	// Get the last topics with pagination
	function get_last_topics($start, $limit)
	{
		$lstTopics =  $this->db->select('ft.id AS tid, ft.title, ft.content, ft.content, ft.date, ft.last_answer_date, u.id AS uid, u.username')
			                   ->from("chatroom_topics ft")
			                   ->join('user u', 'ft.user_id = u.id')
							   ->where(array('ft.status' => 1, 'ft.sticky' => 0))
			                   ->order_by('ft.last_answer_date', 'desc')
			                   ->limit($limit, $start)
			                   ->get();
						   
	    return $lstTopics;
	}
	
	// Get the last topics with pagination
	function get_last_sticky_topics()
	{
		$lstTopics =  $this->db->select('ft.id AS tid, ft.title, ft.content, ft.content, ft.date, ft.last_answer_date, u.id AS uid, u.username')
			                   ->from("chatroom_topics ft")
			                   ->join('user u', 'ft.user_id = u.id')
							   ->where(array('ft.status' => 1, 'ft.sticky' => 1))
			                   ->order_by('ft.last_answer_date', 'desc')
			                   ->get();
						   
	    return $lstTopics;
	}
	
	// Delete answers
	function delete_answers_by_user_id($user_id)
	{
		$this->db->delete('chatroom_chats', array("user_id" => $user_id)); 
	}
	
	// Delete topics
	function delete_topics_by_user_id($user_id)
	{
		$this->db->delete('chatroom_topics', array("user_id" => $user_id)); 
	}
	
	// Get the last topics with pagination from a category
	function get_last_topics_by_category($category, $start, $limit)
	{
		$lstTopics =  $this->db->select('ft.id AS tid, ft.title, ft.content, ft.content, ft.date, ft.last_answer_date, u.id AS uid, u.username (SELECT  COUNT(*) FROM chatroom_chats fa WHERE fa.topic_id = ft.id) AS nb_answers')
			                   ->from("chatroom_topics ft")
			                   ->join('user u', 'ft.user_id = u.id')
			                   ->order_by('ft.last_answer_date', 'desc')
			                   ->limit($limit, $start)
			                   ->get();
						   
	    return $lstTopics;
	}
	
	// Count the records for the pagination
	function count_records()
	{
		$lstTopics =  $this->db->select('id')
			                   ->from("chatroom_topics")
			                   ->where("status", 1)
			                   ->get();
						   
	    return $lstTopics->num_rows();
	}
	
	// Count the records for the pagination
	function count_topics_by_category_id($id)
	{
		$lstTopics =  $this->db->select('id')
			                   ->from("chatroom_topics")
			                   ->get();
						   
	    return $lstTopics->num_rows();
	}
	
	// Count answers from a topic id
	function count_answers_by_topic_id($topic_id)
	{
		$lstAnswers =  $this->db->select('id')
			                   	->from("chatroom_chats")
			                   	->where("topic_id", (int) $topic_id)
							   	->get();
						   
	    return $lstAnswers->num_rows();	
	}
	
	function get_answers_by_topic_id($topic_id, $start, $limit)
	{
		$lstAnswers =  $this->db->select('fa.id, fa.content, fa.date, u.id AS uid, u.username, u.rank, p.url, p.thumb_url, p.status AS photostatus, ui.gender')
			                   ->from("chatroom_chats fa")
			                   ->join('user u', 'fa.user_id = u.id')
							   ->join('user_info ui', 'u.id = ui.user_id')
							   ->join('photo p', 'p.id = ui.main_photo', 'left')
							   ->where("fa.topic_id", (int) $topic_id)
			                   ->order_by('fa.date')
			                   ->limit($limit, $start)
			                   ->get();
						   
	    return $lstAnswers;
	}
	
	
	// Add the new topic to the DB
	function add_topic($title, $content, $user_id)
	{
		 $this->db->set(array('title' 		=> $title,
                			  'content'		=> $content,
                			  'last_answer_id' => 0,
                			  'sticky'			=> 0,
                			  'user_id'		=> $user_id))
                  ->set('date', 'UTC_TIMESTAMP()', false)
                  ->set('last_answer_date', 'UTC_TIMESTAMP()', false)
				  ->insert("chatroom_topics");
                
         return $this->db->insert_id();
	}
	
	// Add the new answer to the DB
	function add_answer($topic_id, $content, $user_id)
	{
		 $this->db->set(array('content'		=> $content,
                			  'topic_id'	=> $topic_id,
                			  'user_id'		=> $user_id))
                  ->set('date', 'UTC_TIMESTAMP()', false)
				  ->insert("chatroom_chats");
				  
	     $answer_id = $this->db->insert_id();
				  
		 // Update the answer id of the topic
         $this->db->where(array("id" => $topic_id));
		 $this->db->set('last_answer_id', $answer_id);
		 $this->db->set('last_answer_date', 'UTC_TIMESTAMP()', false);
		 $this->db->update('chatroom_topics');
                
         return $answer_id;
	}
	
	function change_forum_state($state)
	{
		// Update the answer id of the topic
		$this->db->set('enable_forum', $state);
		$this->db->update('admin');
	}
	
	// Check if a topic exists
	function topic_exists($id)
	{
		
		$topic =  $this->db->select('id')
			             ->from("chatroom_topics")
			             ->where(array('id' => (int) $id))
			             ->get();
						   
	    if($topic->num_rows() > 0)
	    	return true;
	    else
	    	return false;
	}
	
	// Delete an answer
	function delete_answer($id)
	{
		$this->db->delete('chatroom_chats', array("id" => $id));
	}
	
	// Delete a topic
	function delete_topic($id) 
	{
		$this->db->delete('chatroom_topics', array("id" => $id));
	}
	
	// Delete answers from topic id
	function delete_answers_from_topic($id) 
	{
		$this->db->delete('chatroom_chats', array("topic_id" => $id));
	}
	
	// Get an answer by its ID
	function get_answer($id)
	{
		$query = $this->db->select('fa.id, fa.content, fa.topic_id, fa.date, fa.user_id AS uid')
		                  ->from("chatroom_chats fa")
		                  ->where(array('fa.id' => $id))
		                  ->get();
		                  
		return $query->row();
	}
	
	// Get a topic by its ID
	function get_topic($id)
	{
		$query = $this->db->select('ft.id, ft.title, ft.content, ft.content, ft.date, u.id AS uid, u.username, u.email, ui.gender, p.url, p.thumb_url, p.status AS photostatus')
		                  ->from("chatroom_topics ft")
		                  ->join('user u', 'ft.user_id = u.id')
		                  ->join('user_info ui', 'u.id = ui.user_id')
						  ->join('photo p', 'p.id = ui.main_photo', 'left')
							->where(array('ft.id' => $id, 'ft.status' => 1))
		                  ->get();
		                  
		return $query->row();
	}
	
	// Edit an answer
	function edit_answer($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update("chatroom_chats", $data);
	}
	
	// Edit a topic
	function edit_topic($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update("chatroom_topics", $data);	
	}
}
?>