<!-- Emploi du Temps -->

					<section id="emploi_du_temps" class="three">

							<header>
							<h2>Emploi du Temps</h2>
                                                        <?php 
                                                                    $semaine = date('W');
                                                                    
                                                                    if($semaine%2 == 0){
                                                                        echo 'Vous êtes en semaine : B';
                                                                    }else{
                                                                        echo 'Vous êtes en semaine : A';
                                                                    }
                                                                ?>
                                                        
                                                        
                                                        </head>

</head>
							</header>
                                            <h4> Calendrier </h4>
<a id="single_image" href="public/images/Grandetpetit/maxresdefaultgrand.jpg"><img src="public/images/Grandetpetit/maxresdefault.jpg"></a>

						<table id="emploi">
							<tr class="ligneJours">
								<td class="jour heure"></td>
								<td colspan="2" class="jour">LUNDI</td>
								<td colspan="2" class="jour">MARDI</td>
								<td colspan="2" class="jour mercredi">MERCREDI</td>
								<td colspan="2" class="jour jeudi">JEUDI</td>
								<td colspan="2" class="jour">VENDREDI</td>
							</tr>

							<tr>
								<td class="heure">08h00<br>8h55</td>
								<td colspan="2" rowspan="4">SI2 / SISR2 / SLAM 1<br>BOHL,SAMEL<br>A12, B12</td>
								<td colspan="2">Accompagnement personnalisé<br>GOMEZ<br>D14</td>
								<td colspan="2" rowspan="4">SI1 / SI5<br>BOHL<br>A12</td>
								<td colspan="2" rowspan="2">Analyse juridique<br>COLLIARD BOULOGNE<br>A12</td>
								<td colspan="2" rowspan="2">PPE<br>PERNELLE<br>A12</td>
							</tr>

							<tr>
								<td class="heure">8h55<br>9h55</td>
								<td colspan="2">Anglais<br>MESTCHEN<br>A12</td>
							</tr>

							<tr>
								<td class="heure">10h05<br>11h00</td>
								<td rowspan="2">Algorithmique appliquée<br>LOUDOT<br>A12</td>
								<td rowspan="2">CGE<br>COMELATO<br>A12</td>
								<td colspan="2" rowspan="2">CGE<br>COMELATO<br>A12</td>
								<td colspan="2" rowspan="2">PPE<br>RAMEL<br>A12</td>
							</tr>

							<tr>
								<td class="heure">11h00<br>11h55</td>
								
							</tr>

							<tr>
								<td class="heure"></td>
								<td colspan="10">REPAS</td>
							</tr>

							<tr>
								<td class="heure">13h15<br>14h10</td>
								<td rowspan="2">CGE<br>COMELATO<br>A12<br>

										<ul id="navigationMenu">
										    <li>
											    <a class="home" href="#">
										            <span>
										            	<p>9 Novembre 2015</p>
										            	<p>23 Novembre 2015</p>
										            	<p>7 Décembre 2015</p>
										            	<p>4 Janvier 2016</p>
										            	<p>18 Janvier 2016</p>
										            	<p>1 Fevrier 2016</p>
										            	<p>15 Fevrier 2016</p>
										            	<p>29 Fevrier 2016</p>
										            	<p>14 Mars 2016</p>
										            	<p>28 Mars 2016</p>
										            	<p>25 Avril 2016</p>
										            	<p>9 Mai 2015</p>
										            	<p>23 Mai 2015</p>
										            	<p>6 Juin 2015</p>
										            	<p>20 Juin 2015</p>
										            </span>
										        </a>
										    </li>
										</ul>
								</td>
								<td rowspan="2">Analyse managériale<br>COLLIARD BOULOGNE<br>A12</td>
								<td colspan="2" rowspan="4">SI3 / SISR1 / SLAM 2<br>BOHL<br>A12</td>
								<td colspan="2" rowspan="2">Mathématiques<br>SZUCHENDER<br>A12</td>
								<td colspan="2" rowspan="4">SI4 / SI6<br>PERNELLE<br>A12</td>
								<td></td>
								<td>Algorithmique appliquée<br>LOUDOT<br>A12</td>
							</tr>

							<tr>
								<td class="heure">14h10<br>15h05</td>
								<td colspan="2">Anglais<br>MESTCHEN<br>A12</td>
							</tr>

							<tr>
								<td class="heure">15h20<br>16h15</td>
								<td colspan="2">Anglais<br>MESTCHEN<br>A12</td>
								<td colspan="2" rowspan="2"></td>
								<td colspan="2" rowspan="2">Analyse économique<br>LOUDOT<br>A12</td>
							</tr>
 
							<tr>
								<td class="heure">16h15<br>17h10</td>
								<td colspan="2"></td>
								
							</tr>
							
						</table>
					</section>
