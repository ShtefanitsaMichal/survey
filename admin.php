<?php require_once "head.php" ?>

<!-- Podłaczenie bazy danych -->
<?php require_once "db_connection.php" ?>

<!-- podłączenie pliku z kwerendami -->
<?php require_once "queries/queries.php"?>
<?php global $answer, $question1 ?>


<!-- Wykonywanie kwerend -->
<?php 
		try {
			global $conn;
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = $question1 ;
 			$get_all_data = $conn->prepare($sql);
 			$get_all_data -> execute(array($sql));

            }
        	 catch(PDOException $e)
                            {
                            echo $sql . "<br>" . $e->getMessage();
                            }
            $conn = null;                 
?>


    <style>
        th{
            font-size: 14px;
        }
        .table td, .table th {
            padding: inherit;
            font-size: 12px;
            text-align: center;
        }
    </style>

<hr>
   <div class="container">
    <div id="accordion">

    <?php while($row = $get_all_data->fetch(PDO::FETCH_ASSOC)) { ?>
      <div class="card">
        <div class="card-header " data-toggle="collapse" data-target="#collapse<?php echo $row['ID']?>" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link"  aria-expanded="true" aria-controls="collapseOne">
                <?php echo $row['ID']?>
            </button>
          </h5>
        </div>

        <div id="collapse<?php echo $row['ID']?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
                    <div class="row" >

                        <?php
                            
                            echo "<ul> Pytanie 1 ";
                            echo "<li><b> Typ: </b> " . $row['typ'] . "</li>";  
                            echo "<li><b> Wiek: </b>" . $row['wiek'] . "</li>"; 
                            echo "<li><b> Stanowisko: </b>:" . $row['stanowisko'] . "</li>";
                            echo "<li> <b>Data:</b> " . $row['pracownik_data'] . "</li>";
                            echo "</ul>";	
                                //$row['index'] the index here is a field name
                        ?></div>
                        </div>
                    </div>
                </div>                 
                <?php  } ?>
          </div>
        </div>
      </div>
    </div>


 
