            <div class="row" >
		        <table class="table table-hover" id="myTable">
		            <thead>
                        <tr  style="cursor: pointer;" class="info">
                                <th class="bg-secondary text-white">ID</th> 
                                <th class="bg-success text-white">Typ</th> 
                                <th class="bg-success text-white">Wiek</th> 
                                <th class="bg-success text-white">Stan</th> 
                                <th class="bg-primary text-white">Zarz</th> 
                                <th class="bg-primary text-white">Przy</th> 
                                <th class="bg-primary text-white">Dział</th> 
                                <th class="bg-primary text-white">Inny dział</th> 
                                <th class="bg-primary text-white">BD</th> 
                                <th class="bg-primary text-white">Data</th>
                                <th class="bg-warning ">zarzad</th>
                                <th class="bg-warning ">Przy</th>
                                <th class="bg-warning ">Dział</th> 
                                <th class="bg-warning ">Inny dzial</th> 
                                <th class="bg-warning ">BD</th>
                                <th class="bg-warning ">Data</th>    
                        </tr>
		            </thead>
    
                    <tbody>
                        <?php
                            while($row = $get_all_data->fetch(PDO::FETCH_ASSOC)) 
                            {   //Creates a loop to loop through results
                            
                            echo "<tr>
                                    <td>" . $row['ID'] . "</td> 
                                    <td>" . $row['typ'] . "</td> 	
                                    <td>" . $row['wiek'] . "</td> 
                                    <td>" . $row['stanowisko'] . "</td> 
                                    <td>" . $row['zrodlo_zarzad'] . "</td> 
                                    <td>" . $row['zrodlo_przylozony'] . "</td> 
                                    <td>" . $row['zrodlo_dzial'] . "</td> 
                                    <td>" . $row['zrodlo_inny_dzial'] . "</td> 
                                    <td>" . $row['zrodlo_baza_danych'] . "</td> 
                                    <td>" . $row['pracownik_data'] . "</td> 
                                    <td>" . $row['ocena_zrodla_zarzad'] . "</td> 	
                                    <td>" . $row['ocena_zrodla_przylozony'] . "</td> 
                                    <td>" . $row['ocena_zrodla_dzial'] . "</td> 
                                    <td>" . $row['ocena_zrodla_inny_dzial'] . "</td>																			
                                    <td>" . $row['ocena_zrodla_baza_danych'] . "</td>
                                    <td>" . $row['zrodlo_data'] . "</td>																			
                                        
                                </tr>";  //$row['index'] the index here is a field name
                            } 
                        
                            //odbc_close(); //Make sure to close out the database connection
                            echo "</tbody>";
                            echo "</table>"; //Close the table in HTML 
                        
                        ?>
                    </tbody> 
                </table>
	        </div>