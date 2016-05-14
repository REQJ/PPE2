<!-- Portfolio -->
                                  <section id="Portfolio" class="four">

							<header>
								<h2>Portfolio</h2>
							</header>
 <?php
        // boucle sur le tableau 
        $nbport=0;
        //var_dump($lesPortfolios);
        
        //print_r($lesPortfolios);
        foreach ($lesPortfolios as $portfolio){
        ?>
                                       <a href=<?=$portfolio["portfolio_utilisateur"]?>>
                                      <?php
       // var_dump($portfolio["nom_utilisateur"]);
                                      //echo $nbport + var_dump($name);
                                      //$name=$portfolio['nom_utilisateur'];
                                             $nom=$portfolio["nom_utilisateur"];
                                              $prenom=$portfolio["prenom_utilisateur"];
                                              $nom = strtoupper($nom); //Tout en MAJ
                                              $prenom = ucfirst($prenom); //1er Lettre en MAJ

                                      if($nbport%2==0){ ?>
                                               <div class="block_left">
                                      <?php }
                                      else { ?>                                      
                                                 <div class="block_right">  
                                      <?php }?>
						<img src="public/images/profil.jpg" Alt=""/> <!-- Metre dans la BDD la meme image pour tout le monde par defaut -->
							<p class="nomPrenom"><?=$nom ." ". $prenom?></p>
							<!--<p class="email" ></p> Si on veut pas donner notre mail a tt le monde !-->
						</div></a>
                <!-- Fin Modal -->
          
        <?php
        $nbport+=1;
        }
        ?>            
                </section>



<!-------------------------------------------->
<!--					<section id="Portfolio" class="four">

							<header>
								<h2>Portfolio</h2>
							</header>

						<a href="#"><div class="block_left">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">BAILLY	Nicolas</p>
							<p class="email" >nicolas.bailly39380@gmail.com</p>
						</div></a>

						<a href="#"><div class="block_right">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">BAUDRY Samuel</p>
							<p class="email" >samuel.baudry@hotmail.fr</p>
						</div></a>
						
						<a href="#"><div class="block_left">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">BERGERET Florian</p>
							<p class="email" >bergeret.worl@gmail.com</p>
						</div></a>

						<a href="#"><div class="block_right">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">BLANCHON Pierre-Antoine</p>
							<p class="email" >pa.blanchon96@gmail.com</p>
						</div></a>

						<a href="#"><div class="block_left">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">BONGAIN Camille</p>
							<p class="email" >camille.bongain@gmail.com</p>
						</div></a>

						<a href="#"><div class="block_right">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">BOUTER Mathieu</p>
							<p class="email" >bouter.mathieu@outlook.fr</p>
						</div></a>

						<a href="#"><div class="block_left">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">BREDA Kévin</p>
							<p class="email" >kbreda73@gmail.com</p>
						</div></a>

						<a href="#"><div class="block_right">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">BRENOT Romain</p>
							<p class="email" >romain.brenot@laposte.net</p>
						</div></a>

						<a href="#"><div class="block_left">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">CHAPOUTOT Guillaume</p>
							<p class="email" >guillaume.chapoutot.2@gmail.fr</p>
						</div></a>

						<a href="#"><div class="block_right">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">CHARMOILLAUX Keryann</p>
							<p class="email" >charmoillaux.keryann@free.fr</p>
						</div></a>

						<a href="#"><div class="block_left">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">DA SILVA RAMOS Bryan</p>
							<p class="email" >dasilvaramosbryan@gmail.com</p>
						</div></a>

						<a href="#"><div class="block_right">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">DE LA MATA Xavier</p>
							<p class="email" >xavierdlm1993@gmail.com</p>
						</div></a>

						<a href="#"><div class="block_left">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">DONZE Louis</p>
							<p class="email" >louisdonze@outlook.fr</p>
						</div></a>

						<a href="#"><div class="block_right">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">FORT Adrien</p>
							<p class="email" >a.fort564@laposte.net</p>
						</div></a>

						<a href="#"><div class="block_left">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">GIGANDET Guillaume</p>
							<p class="email" >guillaume.gigandet@free.fr</p>
						</div></a>

						<a href="#"><div class="block_right">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">GREGOIRE Jimmy</p>
							<p class="email" >jimmy.gregoire@live.fr</p>
						</div></a>

						<a href="#"><div class="block_left">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">HAMDAOUI Yannis</p>
							<p class="email" >hamdaoui.yannis@gmail.com</p>
						</div></a>

						<a href="#"><div class="block_right">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">JEANPARIS Gaétan</p>
							<p class="email" >gjeanparis@aricia.fr</p>
						</div></a>

						<a href="#"><div class="block_left">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">JOSI Sébastien</p>
							<p class="email" >sebastienjosi@yahoo.fr</p>
						</div></a>

						<a href="#"><div class="block_right">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">MAQUART Nicolas</p>
							<p class="email" >nico39700@gmail.com</p>
						</div></a>

						<a href="#"><div class="block_left">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">MONROLIN Lucas</p>
							<p class="email" >lucas.monrolin@orange.fr</p>
						</div></a>

						<a href="#"><div class="block_right">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">PERROUD Vincent</p>
							<p class="email" >vincent.perroud@outlook.fr</p>
						</div></a>

						<a href="#"><div class="block_left">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">POIRAULT Arthur</p>
							<p class="email" >arthurp7@gmx.com</p>
						</div></a>

						<a href="#"><div class="block_right">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">BOUTER Mathieu</p>
							<p class="email" >bouter.mathieu@outlook.fr</p>
						</div></a>

						<a href="#"><div class="block_left">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">RAMI Sid Ahmed</p>
							<p class="email" >sideramidu39@msn.com</p>
						</div></a>

						<a href="#"><div class="block_right">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">RENAUDIN Pierre</p>
							<p class="email" >pierre.renaudin@outlook.fr</p>
						</div></a>

						<a href="#"><div class="block_left">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">REQUET Jérome</p>
							<p class="email" >requetor@gmail.com</p>
						</div></a>

						<a href="#"><div class="block_right">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">ROUSSEAUX Baptiste</p>
							<p class="email" >rousseaux-jlbs@wanadoo.fr</p>
						</div></a>

						<a href="#"><div class="block_left">
						<img src="images/gon_profil.jpg" Alt=""/>
							<p class="nomPrenom">ROY David</p>
							<p class="email" >roydav1996@gmail.com</p>
						</div></a>

						<a href="#"><div class="block_right">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">STRIBY Baptiste</p>
							<p class="email" >baptiste.striby@gmail.com</p>
						</div></a>

						<a href="#"><div class="block_left">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">VIENNOT Quentin</p>
							<p class="email" >quentinviennot@gmail.com</p>
						</div></a>

						<a href="#"><div class="block_right">
						<img src="images/profil.jpg" Alt=""/>
							<p class="nomPrenom">VIONNET Arnaud</p>
							<p class="email" >a.vionnet97@gmail.com</p>
						</div></a>
					</section>-->