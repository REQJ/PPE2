				<!-- Description des Epreuves -->
					<section id="Description_des_Epreuves" class="two">

							<header>
								<h2>Description des Epreuves</h2>
							</header>
                        <tbody>
                            
                        <?php
                         foreach ($lesEpreuves as $epreuve){
                       ?>  
                  
                        <div class="accordionButton">
                            <div class="btnTitle">
                                <p><?php echo $epreuve["nom_epreuve"]?> </p>
                                <p>   <?php $epreuve["duree_epreuve"]?></p>
                            </div>
                            <div class="plusButton"></div>
                                
                        </div>
			<div class="accordionContent">
				<p><?php echo $epreuve["description_epreuve"]?></p>
                                <p><?php echo $epreuve["coefficient_epreuve"]?></p>
                                <p><?php echo $epreuve["type_epreuve"]?></p>
                                
                                
                        </div>
                        <?php
                        }
                        ?> 
                        </tbody>

			
                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/accord.js"></script>



					</section>
                        
                                          