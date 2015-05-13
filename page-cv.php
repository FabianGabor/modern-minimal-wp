<?php
/**
 * Template Name: CV Page
 * @package Modern Minimal
 */

get_header(); ?>

<div id="container" class="oneletrajz scene_element scene_element--fadein" data-no-instant>
		
	<ul id="section-nav" class="section-nav">
		<li><a href="#rolam">Rólam</a></li>
		<li><a href="#tanulmanyok">Tanulmányok</a></li>
		<li><a href="#tapasztalat">Szakmai tapasztalat</a></li>
		<li><a href="#kepessegek">Képessegek</a></li>
		<li><a href="#nyelvismeretek">Nyelvismeretek</a></li>
		<li><a href="#portfolio">Portfólió</a></li>
		<li><a href="#ajanlolevel">Ajánlólevél</a></li>
	</ul>
	
	<div class="row section" id="rolam">
		<div class="large-9 columns">
			<h1 class="ultra-bold nomargin-bottom">Fábián <span class="thin h2 uppercase">Gábor</span></h1>
			<h2 class="uppercase h3 light opacity-60 nomargin-top">web designer / programozó</h2>
		</div>
		
		<div class="large-3 columns">
			<p class="nomargin">
				<svg class="icon pin"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons.svg#pin"></use></svg>
				Nyíregyháza
			</p>
			<p class="nomargin">
				<svg class="icon phone"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons.svg#phone"></use></svg>
				+36 70 407 5555
			</p>
			<p class="nomargin">
				<svg class="icon email"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons.svg#email"></use></svg>
				<a href="mailto:info@fabiangabor.com">info@fabiangabor.com</a>
			</p>			
		</div>
	</div>
	
	<div class="row section" id="tanulmanyok">
		<div class="large-12 columns">
			<h1 class="h2 uppercase thin">Tanulmányok</h1>

			<table role="grid">
				<tr>
					<td class="opacity-60">2006 - 2008</td>
					<td>
						<p class="bold nomargin">Sapientia<span class="regular"> - Marosvásárhely</span></p>						
						<p class="opacity-60">Programozási nyelvek, adatbázisok, algoritmusok, információelmélet.</p>
					</td>
				</tr>
				
				<tr>
					<td class="opacity-60">2009 - 2012</td>
					<td>
						<p class="bold nomargin">Művészeti és Design Egyetem<span class="regular"> - Kolozsvár</span></p>
						<p class="opacity-60">Fotó, videó és számítógépes képfeldolgozás.</p>
					</td>
				</tr>
				
			</table>
		</div>
	</div>
	
	<div class="row section" id="tapasztalat">
		<div class="large-12 columns">
			<h1 class="h2 uppercase thin">Szakmai tapasztalat</h1>

			<table role="grid">
				<tr>
					<td>
						<p>
							<span class="bold">Bungalow.net</span><br>
							<span class="opacity-60">2012 - 2014</span>
						</p>
					</td>
					<td>
						<h4 class="bold nomargin">Web designer / programozó</h4>
						<p class="opacity-60">Az első online utazási iroda, mely 1996 óta 30887 szálláshelyet kínál. A marketing osztály és informatikai osztály legfőbb része Romániából működik a Bungalow.Net Trading NV irányítása alatt.</p>
					</td>
				</tr>
				
				<tr>
					<td>
						<p>
							<span class="bold">CID DESIGN STUDIO</span><br>
							<span class="opacity-60">2008 - 2009</span>
						</p>
					</td>
					<td>
						<h4 class="bold nomargin">grafikus / dtp</h4>
						<p class="opacity-60">Egyike a legnagyobb romániai nyomdáknak / grafikai stúdióknak.</p>
					</td>
				</tr>
					
				<tr>
					<td>
						<p>
							<span class="bold">CHESPA TRANSILVANIA</span><br>
							<span class="opacity-60">2007 - 2008</span>
						</p>
					</td>
					<td>
						<h4 class="bold nomargin">grafikus / dtp</h4>
						<p class="opacity-60">1993 óta működő, 12 országban jelen lévő, grafikai szolgáltatásokat nyújtó és nyomdai festékanyagokat gyártó cég.</p>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="row section" id="kepessegek">
		<div class="large-12 columns">
			<h1 class="h2 uppercase thin">Képességek</h1>
		</div>
		
		<div class="large-4 small-6 columns">
			<label class="opacity-60">Adobe Photoshop</label>
			<div class="progress success"> <span class="meter m90 wow"></span> </div>
		</div>
		
		<div class="large-4 small-6 columns">
			<label class="opacity-60">Adobe Illustrator</label>
			<div class="progress success"> <span class="meter m70 wow"></span> </div>
		</div>
		
		<div class="large-4 small-6 columns">
			<label class="opacity-60">Adobe Lightroom</label>
			<div class="progress success"> <span class="meter m90 wow"></span> </div>
		</div>
		
		<div class="large-4 small-6 columns">
			<label class="opacity-60">html / css / sass</label>
			<div class="progress success"> <span class="meter m80 wow"></span> </div>
		</div>
		
		<div class="large-4 small-6 columns">
			<label class="opacity-60">javascript / jquery</label>
			<div class="progress success"> <span class="meter m40 wow"></span> </div>
		</div>
		
		<div class="large-4 small-6 columns">
			<label class="opacity-60">wordpress</label>
			<div class="progress success"> <span class="meter m50 wow"></span> </div>
		</div>
	</div>	
	
	<div class="row section" id="nyelvismeretek">
		<div class="large-12 columns">
			<h1 class="h2 uppercase thin">Nyelvismeretek</h1>
		</div>
		
		<div class="large-4 small-4 columns">
			<label class="opacity-60">angol</label>
			<div class="progress success"> <span class="meter m90 wow"></span> </div>
		</div>
		
		<div class="large-4 small-4 columns">
			<label class="opacity-60">francia</label>
			<div class="progress success"> <span class="meter m40 wow"></span> </div>
		</div>
		
		<div class="large-4 small-4 columns">
			<label class="opacity-60">román</label>
			<div class="progress success"> <span class="meter m90 wow"></span> </div>
		</div>
	</div>
	
	<div class="row section" id="portfolio">
		<div class="large-12 medium-12 small-12 columns">
			<h1 class="h2 uppercase thin">Portfólió</h1>				
		</div>
		
		<div class="large-12 medium-12 small-12 columns">
			<div class="row collapse lightbox img_fullW">
				
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'cv' ); ?>
				<?php endwhile; // end of the loop. ?>
				
				
			</div>
		</div>
	</div>	
	
	<div class="row section wow " id="ajanlolevel">
		<div class="large-12 columns">
			<h1 class="h2 uppercase thin">Ajánlólevél</h1>
		</div>
		
		<div class="large-12 columns">
			<blockquote>
				<p>Feladatköréhez különböző ügyfelek megrendelésére történő weboldal designok készítése tartozott. Jó érzéke van az apró részletekhez és kreatív alkalmazásokkal képes gazdagítani a felhasználói élményt.</p>

				<p>A fotográfusi és programozó képességei többletértéket nyújtanak munkájának.</p>

				<p>Jellemvonásait tekintve, Fábián Gábor eredményorientáltnak, kitartónak, pontosnak és felelősségtudatosnak bizonyult.</p>
			
				<footer>
					<cite>
						<a target="_blank" href="http://www.bungalow.net/hu/">SC Bungalow Net Internet Services SRL</a><br>
						Mr. Willem van der Wilden<br>
						CEO
					</cite>
				</footer>
			</blockquote>

		</div>
	</div>
	
</div><!-- #container -->


	
	
<?php get_footer(); ?>
