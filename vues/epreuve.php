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
                                <p><?php echo $epreuve["NOM_EPREUVE"]?> </p>
                                <p>   <?php $epreuve["DUREE_EPREUVE"]?></p>
                            </div>
                            <div class="plusButton"></div>
                                
                        </div>
			<div class="accordionContent">
				<p><?php echo $epreuve["DESCRIPTION_EPREUVE"]?></p>
                                <p><?php echo $epreuve["COEFFICIENT_EPREUVE"]?></p>
                                <p><?php echo $epreuve["TYPE_EPREUVE"]?></p>
                                <p><?php echo $epreuve["DUREE_EPREUVE"]?></p>
                                
                        </div>
                        <?php
                        }
                        ?> 
                        </tbody>

			
                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/accord.js"></script>



					</section>
                        
                                          