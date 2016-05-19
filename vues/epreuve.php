				<!-- Description des Epreuves -->
					<section id="Description_des_Epreuves" class="two">

							<header>
								<h2>Description des Epreuves</h2>
							</header>
<?php
foreach($lesEpreuves as $epreuve){?>
                                            
                        <div class="accordionButton"><div class="btnTitle"><?=$epreuve["nom_epreuve"]?></div><div class="plusButton"></div></div>
			<div class="accordionContent">
                        <p><?=$epreuve["description_epreuve"]?></p>
                        <p>Durée: <?=$epreuve["duree_epreuve"]?></p>
                        <p>Coefficient: <?=$epreuve["coefficient_epreuve"]?></p>
                        <p>Type: <?=$epreuve["type_epreuve"]?></p>
			</div>         
        <?php
        }
        ?>              
                                            

<!--			<div class="accordionButton"><div class="btnTitle">Culture générale et expression</div><div class="plusButton"></div></div>
			<div class="accordionContent">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu risus arcu, vel molestie nunc. Vivamus nec velit lacus. Phasellus lorem sem, adipiscing sed eleifend vulputate, interdum nec massa. Aliquam erat volutpat. Sed pellentesque consequat orci eget facilisis. Nulla facilisi. Suspendisse semper egestas sagittis. Nunc tempus pulvinar justo, sit amet porta ante interdum eget. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi at risus nisl. Fusce eget adipiscing dolor. Donec condimentum nisl et nisl congue vitae blandit ligula ullamcorper. Aliquam erat volutpat. Proin auctor tempus volutpat.</p>
			</div>

			<div class="accordionButton"><div class="btnTitle">Anglais</div><div class="plusButton"></div></div>
			<div class="accordionContent">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu risus arcu, vel molestie nunc. Vivamus nec velit lacus. Phasellus lorem sem, adipiscing sed eleifend vulputate, interdum nec massa. Aliquam erat volutpat. Sed pellentesque consequat orci eget facilisis. Nulla facilisi. Suspendisse semper egestas sagittis. Nunc tempus pulvinar justo, sit amet porta ante interdum eget. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi at risus nisl. Fusce eget adipiscing dolor. Donec condimentum nisl et nisl congue vitae blandit ligula ullamcorper. Aliquam erat volutpat. Proin auctor tempus volutpat.</p>
			</div>
			
			<div class="accordionButton"><div class="btnTitle">Mathématiques</div><div class="plusButton"></div></div>
			<div class="accordionContent">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu risus arcu, vel molestie nunc. Vivamus nec velit lacus. Phasellus lorem sem, adipiscing sed eleifend vulputate, interdum nec massa. Aliquam erat volutpat. Sed pellentesque consequat orci eget facilisis. Nulla facilisi. Suspendisse semper egestas sagittis. Nunc tempus pulvinar justo, sit amet porta ante interdum eget. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi at risus nisl. Fusce eget adipiscing dolor. Donec condimentum nisl et nisl congue vitae blandit ligula ullamcorper. Aliquam erat volutpat. Proin auctor tempus volutpat.</p>
			</div>
			
			<div class="accordionButton"><div class="btnTitle">Algorithmique appliquée</div><div class="plusButton"></div></div>
			<div class="accordionContent">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu risus arcu, vel molestie nunc. Vivamus nec velit lacus. Phasellus lorem sem, adipiscing sed eleifend vulputate, interdum nec massa. Aliquam erat volutpat. Sed pellentesque consequat orci eget facilisis. Nulla facilisi. Suspendisse semper egestas sagittis. Nunc tempus pulvinar justo, sit amet porta ante interdum eget. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi at risus nisl. Fusce eget adipiscing dolor. Donec condimentum nisl et nisl congue vitae blandit ligula ullamcorper. Aliquam erat volutpat. Proin auctor tempus volutpat.</p>
			</div>

			<div class="accordionButton"><div class="btnTitle">Analyse économique, managériale et juridique des services informatiques</div><div class="plusButton"></div></div>
			<div class="accordionContent">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu risus arcu, vel molestie nunc. Vivamus nec velit lacus. Phasellus lorem sem, adipiscing sed eleifend vulputate, interdum nec massa. Aliquam erat volutpat. Sed pellentesque consequat orci eget facilisis. Nulla facilisi. Suspendisse semper egestas sagittis. Nunc tempus pulvinar justo, sit amet porta ante interdum eget. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi at risus nisl. Fusce eget adipiscing dolor. Donec condimentum nisl et nisl congue vitae blandit ligula ullamcorper. Aliquam erat volutpat. Proin auctor tempus volutpat.</p>
			</div>

			<div class="accordionButton"><div class="btnTitle">Conception et maintenance de solutions informatiques	</div><div class="plusButton"></div></div>
			<div class="accordionContent">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu risus arcu, vel molestie nunc. Vivamus nec velit lacus. Phasellus lorem sem, adipiscing sed eleifend vulputate, interdum nec massa. Aliquam erat volutpat. Sed pellentesque consequat orci eget facilisis. Nulla facilisi. Suspendisse semper egestas sagittis. Nunc tempus pulvinar justo, sit amet porta ante interdum eget. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi at risus nisl. Fusce eget adipiscing dolor. Donec condimentum nisl et nisl congue vitae blandit ligula ullamcorper. Aliquam erat volutpat. Proin auctor tempus volutpat.</p>
			</div>

            <div class="accordionButton"><div class="btnTitle">Production et fourniture de services informatiques</div><div class="plusButton"></div></div>
			<div class="accordionContent">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu risus arcu, vel molestie nunc. Vivamus nec velit lacus. Phasellus lorem sem, adipiscing sed eleifend vulputate, interdum nec massa. Aliquam erat volutpat. Sed pellentesque consequat orci eget facilisis. Nulla facilisi. Suspendisse semper egestas sagittis. Nunc tempus pulvinar justo, sit amet porta ante interdum eget. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi at risus nisl. Fusce eget adipiscing dolor. Donec condimentum nisl et nisl congue vitae blandit ligula ullamcorper. Aliquam erat volutpat. Proin auctor tempus volutpat.</p>
			</div>
			
			<div class="accordionButton"><div class="btnTitle">Parcours de professionnalisation</div><div class="plusButton"></div></div>
			<div class="accordionContent">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu risus arcu, vel molestie nunc. Vivamus nec velit lacus. Phasellus lorem sem, adipiscing sed eleifend vulputate, interdum nec massa. Aliquam erat volutpat. Sed pellentesque consequat orci eget facilisis. Nulla facilisi. Suspendisse semper egestas sagittis. Nunc tempus pulvinar justo, sit amet porta ante interdum eget. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi at risus nisl. Fusce eget adipiscing dolor. Donec condimentum nisl et nisl congue vitae blandit ligula ullamcorper. Aliquam erat volutpat. Proin auctor tempus volutpat.</p>
		</div>-->
            



        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/accord.js"></script>



					</section>