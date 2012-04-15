<?php
class CalEditor {
    private $_db;

    public function __construct() {
        // TODO
    }

    public function setDb($db) {
        $this->_db = $db;
    }

    public function addDate($id, $start, $end) {
        $query = 'INSERT INTO `dates` (`id`, `holiday`, `start`, `end`) VALUES
(null, ' . $id . ', ' . $start . ', ' . $end . ');';
        
        $result = mysql_query($query, $this->_db); 

        if (!$result) {
            throw new Exception('Problem with query: ' . mysql_error());
        } else {
            // redirect back to form
            header('Location: ?m=e');
        }
    }
 
    public function renderForm() {
        $query = 'SELECT ho.id as id, ho.name as name, do.name as denomination
                  FROM holidays ho, denominations do
                  WHERE ho.denomination = do.id
                  ORDER BY ho.denomination';
        $result = mysql_query($query, $this->_db); 

        if (!$result) {
            throw new Exception('Problem with query: ' . mysql_error());
        }
        $holidays = array();

        if (mysql_num_rows($result) > 0) {
            while ($row = mysql_fetch_assoc($result)) {
                //var_dump($row);
                $holidays[] = array(
                    'name' => $row['name'] . ', ' . $row['denomination'],
                    'value' => $row['id']
                );
            }
        }

        $view = new Template('templates/edit.phtml');
        $view->holidays = $holidays;
	header('Content-Type: text/html; charset=utf-8');
        $view->render();
    }
}
?>
