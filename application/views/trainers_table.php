<!-- START TABLE -->
                        <div class="simplebox grid740">
                        
                        	<div class="titleh"><h3>Data Table</h3>
                            <div class="shortcuts-icons">
                            	<a class="shortcut tips" href="#" title="Info About This Widget"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/question.png" width="25" height="25" alt="icon" /></a>
                                <a class="shortcut tips" href="#" title="Add New Item"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/plus.png" width="25" height="25" alt="icon" /></a>
                                <a class="shortcut tips" href="#" title="Search"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/search.png" width="25" height="25" alt="icon" /></a>
                                <a class="shortcut tips" href="#" title="Refresh Data"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/refresh.png" width="25" height="25" alt="icon" /></a>
                            </div>
                            </div>
                            
                            	
                                <table id="myTable" class="tablesorter"> 
				    <thead> 
					<tr> 
						<th>Naam</th> 
						<th>Email</th> 
						<th>Woonplaats</th>
						<th>Uurloon</th>
						<th>Beschrijving</th> 
						<th>Website</th> 
					</tr> 
				    </thead> 
                                    
                                    <tbody> 			
					<?php
					    if( $trainers )
					    {
						foreach( $trainers as $trainer )
						{
						    echo '<tr>';
						    echo '<td><a href=' . base_url() . 'trainers/profile/' . $trainer -> id . '>' . $trainer -> name . '</a></td>';
						    echo '<td>' . $trainer -> email . '</td>';
						    echo '<td>' . $trainer -> city . '</td>';
						    echo '<td>' . $this -> format -> cents_to_amount($trainer -> salary) . '</td>';
						    echo '<td>' . $trainer -> short_description . '</td>';
						    echo '<td>' . $trainer -> website . '</td>';
						    echo '</tr>';
						}
					    }
					?>
					
                                    </tbody> 
                                </table>
                            
                            
                        </div>
                        <!-- END TABLE -->