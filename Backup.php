<?php 

backup_tables('localhost','root','tamboli9214','company');

/* backup the db OR just a table */
function backup_tables($host,$user,$pass,$name,$tables = '*')
{
   
   $link = mysqli_connect($host,$user,$pass,$name);
   //mysql_select_db($name,$link);
   
   //get all of the tables
   if($tables == '*')
   {
      $tables = array();
      $sql = 'SHOW TABLES';
      $result = mysqli_query($link,$sql);
      while($row = mysqli_fetch_row($result))
      {
         $tables[] = $row[0];
      }
   }
   else
   {
      $tables = is_array($tables) ? $tables : explode(',',$tables);
   }
   
   //cycle through
   foreach($tables as $table)
   {
      $sql = 'SELECT * FROM '.$table;
      $result = mysqli_query($link,$sql);
      $num_fields = mysqli_num_fields($result);
      
      $return = '';
      $return.= 'DROP TABLE '.$table.';';
      $row2 = mysqli_fetch_row(mysqli_query($link,'SHOW CREATE TABLE '.$table));
      $return.= "\n\n".$row2[1].";\n\n";
      
      for ($i = 0; $i < $num_fields; $i++) 
      {
         while($row = mysqli_fetch_row($result))
         {
            $return.= 'INSERT INTO '.$table.' VALUES(';
            for($j=0; $j < $num_fields; $j++) 
            {
               $row[$j] = addslashes($row[$j]);
               $row[$j] = preg_replace("/\n/","\\n",$row[$j]);
               if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
               if ($j < ($num_fields-1)) { $return.= ','; }
            }
            $return.= ");\n";
         }
      }
      $return.="\n\n\n";
   }
   
   //save file
   /*$handle = fopen('db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
   fwrite($handle,$return);
   fclose($handle);*/

   foreach ($tables as $table) {
      # code...
      echo $table;
   }
   
}

?>