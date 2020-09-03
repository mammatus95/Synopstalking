<?php

function insertNewDatasetToSQL($db_server, $db_name, $sql, $table, $zeit, $type)
{
#echo $type;
  if($type == "SQL")
  {
  ### CONNECT TO DB SERVER, SELECT DB
		# Link zur Datenbank

    echo pg_last_error($db_connection);

  ### 0. NEUE VALUES AUFBEREITEN
    $n_col = array();
    $n_val = array();

    #echo $sql;
    $nc = explode(";;;;;", $sql);

    $cnt = 0;

    for($i = 0; $i < count($nc); $i++)
    {
      $tc = explode(":::", $nc[$i]);
      $tmp_col = trim($tc[0]);
      $tmp_val = trim($tc[1]);
   
      if($tmp_val != "")
      {
	$n_col[$cnt] = $tmp_col;
	$n_val[$cnt] = $tmp_val;
	$cnt++;
      }
    }

  #var_dump($n_col);
  #var_dump($n_val);

  ### 1. ALLE SPALTEN DER TABELLE ERFRAGEN
    $sql = "SELECT column_name FROM information_schema.columns WHERE table_schema='public' AND table_name='$table'";
    $reqn = pg_query($sql);

    echo pg_last_error($db_connection);

    $a_col_name = array();
    $a_col_val = array();

    $c = 0;

    while($r = pg_fetch_object($reqn))
    {
      $a_col_name[$c] = $r->column_name;
      $c++;
    }

  #  var_dump($a_col_name);

   
  ### 2. ALLE DATEN DES DATENSATZES AUSLESEN && NEUEN DATENSATZ MONTIEREN
      $sql = "SELECT * FROM $table WHERE zeit='$zeit' LIMIT 1";

      $reqn = pg_query($sql);

      $col_list = "";
      $val_list = "";
      while($r = pg_fetch_object($reqn))
      {
	for($x = 0; $x < count($a_col_name); $x++)
	{
	  $a_col_val[$x] = trim($r->$a_col_name[$x]);

	    
	### LEERE EINTRAEGE UND "NULL" AUSFILTER UND >> SET EMPTY!!!
	  if($a_col_val[$x] != "NULL" && $a_col_val[$x] != NULL && $a_col_val[$x] != "")
	  {
	    if($col_list != "") $col_list .= ", ";
	    $col_list .= $a_col_name[$x];

	    if($val_list != "") $val_list .= ", ";
	    $val_list .= "'".$a_col_val[$x]."'";

	  } // EO if
	} // EO for
      } // EO while


  ### COL- / VAL-LISTE mit NEUEN DATEN ERZEUGEN
    $x_n = 0;
    $col_list_n = "zeit";
    $val_list_n = "'".$zeit."'";
    if(count($n_col) == count($n_val))
    {   
       
      for($i = 0; $i < count($n_col); $i++)
      { 

	$col_list_n .= ", ".$n_col[$x_n];  
	$val_list_n .= ", '".$n_val[$x_n]."'";

	$x_n++;
      }
    }

    

  ### 3. AUFBAU DES NEUEN GEUPDATETEN DATENSATZES


  ### 4. SQL >> DELETE
      $d_sql = "DELETE FROM $table WHERE zeit='$zeit'";

      #echo "\n\n$d_sql";

      $res1 = pg_query($d_sql);
      pg_query("BEGIN") or die("Could not start transaction\n");


  ### 5. INSERT
      $n_sql = "INSERT INTO $table($col_list_n) VALUES($val_list_n)";

      #echo "\n\n".$n_sql; 

      $res2 = pg_query($n_sql);



      if($res1 and $res2)
      {
	  #echo "\n\nCommiting transaction\n";
	  echo "1";
	  pg_query("COMMIT") or die("Transaction commit failed\n");
	  
    } 
    else
    {
	#echo "\n\nRolling back transaction\n";
	echo "-2";
	pg_query("ROLLBACK") or die("Transaction rollback failed\n");;
    }

    echo pg_last_error($db_connection);
  } // EO if SQL
  else if($type == "ISQL") # ==> INFORMIX UPDATE
  {
#      echo "\nTODO: isql-update";


############################################################################
### NEW >> UPDATE ISQL = GET OLD DATASET (COMPLETE) >> FILL MISSING COLS IN NEW DATASET >>  DELETE OLD DATASET >> INSERT NEW DATASET
############################################################################

### 0. OPEN DB CONNECTION
    $database = 'informix:DSN=miks-informix-berlin';
     # echo "\t$database\tX\t";
 
  ### CONNECT TO DB SERVER, SELECT DB
    $db_connection = new PDO($database);
    $err = $db_connection->errorInfo();


### -2. NEUE VALUES AUFBEREITEN
    $n_col = array();
    $n_val = array();

    #echo $sql;
    $nc = explode(";;;;;", $sql);

    $cnt = 0;

    for($i = 0; $i < count($nc); $i++)
    {
      $tc = explode(":::", $nc[$i]);
      $tmp_col = trim($tc[0]);
      $tmp_val = trim($tc[1]);
   
      if($tmp_val != "")
      {
	$n_col[$cnt] = trim(strtolower($tmp_col));
	$n_val[$cnt] = $tmp_val;
	$cnt++;
      }
      else
      {
	$n_col[$cnt] = trim(strtolower($tmp_col));
	$n_val[$cnt] = "";
	$cnt++;
      }
    }
#echo "\nTABLE: ".$table;

#echo "\n\n\nCOLS : \n";
#  var_dump($n_col);
#echo "\n\nVALS : \n";
#  var_dump($n_val);

#echo "\n\n";
  ### -1. ALLE SPALTEN DER TABELLE ERFRAGEN
#    $sql = "SELECT column_name FROM information_schema.columns WHERE table_schema='public' AND table_name='$table'";
  
#    $sql = "SELECT * FROM systables";
#    $sql = "SELECT tabname, colno, colname FROM systables a, syscolumns b ORDER BY colno;";


#    $zeit = substr($zeit, 0, 10);
    $sql = "SELECT FIRST 1 * FROM $table WHERE zeit='$zeit'";

#echo $sql."\n\n";

    $results = $db_connection->query($sql);

    $err = $db_connection->errorInfo();

#echo "\n\nRESULTS (Col-Names): ";
#var_dump($results);



#var_dump($results);
    $update_cols = array();
    $update_vals = array();
    $update_cnt = 0;
   if(!empty($results))
   {
     foreach ($results as $result)
     {
 #var_dump($result);

 #echo count($a_fields);
 ##var_dump($a_fields);


      $field_names = array_keys($result);
      $field_names2 = array();
      $field_vals = array();

    // JEDES 2. ELEMENT AUS DEM ARRAY LOESCHEN
      $d = 0;
      for($i = 0; $i < count($field_names); $i+=2)
      {
	$field_names2[$d] = strtolower($field_names[$i]);
	$field_vals[$d] = $result[$d];
	$d++;
      }
      $field_names = $field_names2;



       for($i = 0; $i < count($field_names); $i++)
       {
	 $this_field_name = strtolower($field_names[$i]);
	 $this_field_val = $field_vals[$i];



	 $field_exists = 0;
	 for($k = 0; $k < count($n_col); $k++)
	 {
	   if($this_field_name == $n_col[$k])
	   {

	     $field_exists = 1;
	     $field_vals[$i] = $n_val[$k];
	   }

	 } // EO FOR count n_col


	 if($field_exists == 0)
	 {
	  // ALTEN WERT EINFUEGEN

	 }

#	 echo $this_field_name." << FIELD NAME\t";
#	 echo $this_field_val." << FIELD VALUE\n\n";
       }// EO FOR count field_names


     } // EO FOR EACH
   } // EO if ! empty

#echo "\n\nUPDATE ARRAY:\n\n";
#var_dump($field_names);
#var_dump($field_vals);

    
    $update = "UPDATE $table SET ";

    $k = 0;  
    for($i = 0; $i < count($field_names); $i++)
    {
      if($field_names[$i] != "zeit")
      {
        if($k > 0) $update .= ", ";

        $update .= $field_names[$i]."='".$field_vals[$i]."'";

	$k++;
      }  
    }

    $update .= " WHERE zeit='$zeit'";

#echo "\n\n".$update."\n\n";
    $updates  = $db_connection->query($update);

#var_dump($updates);

    $err = $db_connection->errorInfo();
    
    if($err[0] == "00000") echo "1";
    else
    {

      var_dump($err);
      echo "\nSQL: ". $update;
    }

############################################################################
  }
}

if($_POST['db_server'] && $_POST['db_name'] && $_POST['sql'] && $_POST['table'] && $_POST['zeit'] && $_POST['type'])
{
  insertNewDatasetToSQL(trim($_POST['db_server']), trim($_POST['db_name']), trim($_POST['sql']), trim($_POST['table']), trim($_POST['zeit']), trim($_POST['type']) );
  insertNewDatasetToSQL("160.45.74.54", trim($_POST['db_name']), trim($_POST['sql']), trim($_POST['table']), trim($_POST['zeit']), "SQL");

}


?>
