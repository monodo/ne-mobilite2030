<?php $page = 'index'; $title='Tous reliés!'; include 'common/header.php'; ?>

<article id="home-map" class="overlay-visible">
	<div class="overlay">
		<div class="wrapper">
			<div class="col_7">
				<h1>Tous reliés!</h1>
				<p>Relier les régions et les agglomérations de notre canton est une volonté du Conseil d'Etat. Pour y parvenir, il a développé la stratégie cantonale "Neuchâtel Mobilité 2030" soutenue par le Grand Conseil. Elle établit la planification des besoins en infrastructures routières et de transports publics pour les vingt prochaines années.</p>
				<p>Un réseau de transports performant permettra à notre canton de se rassembler, d'optimiser ses structures et de se réformer de l'intérieur pour rayonner vers l'extérieur. Le gouvernement en est convaincu, au même titre que les acteurs socio-économiques neuchâtelois.</p>
				<p>La concrétisation de la vision "Un canton, un espace" doit être le moteur de nos ambitions communes. En appuyant le projet réaliste et financièrement cohérent soumis à son vote en février prochain, la population neuchâteloise s'affirmera et enverra un message fort à Berne sur sa volonté de soutenir le développement de son canton.</p>
				<p><em>Le Conseil d'Etat</em></p>
			</div>
			<a href="#" id="btn-decouvrir" class="btn-decouvrir"><strong>Découvrir</strong><br />la carte</a>
		</div>
		<img src="img/un-canton.svg" class="img-reseau" />
	</div>
	<div id="map">
		<div id="layerTree">
			<a href="#" id="layerTree-collaper"></a>
            <p><img src="map/static/images/nomenclature.png" width="20">		<input type="checkbox" name="layerId" id="nomenclature_localite" 		value="nomenclature_localite" checked onchange="mb.map.setOverlay();" >		<label for="nomenclature_localite">Localités</label></p>
            <!-- <p><img src="map/static/images/nouvelles_gares.png" width="20">		<input type="checkbox" name="layerId" id="nouvelles_gares" 				value="nouvelles_gares" onchange="mb.map.setOverlay();" checked>			<label for="nouvelles_gares">Nouvelles gares</label></p> -->
            <p><img src="map/static/images/mobilite_douce.png" width="20">		<input type="checkbox" name="layerId" id="mobilite_douce" 				value="mobilite_douce" onchange="mb.map.setOverlay();" checked >			<label for="mobilite_douce">Mobilité douce</label></p>
            <p><img src="map/static/images/projets_rer.png" width="20">			<input type="checkbox" name="layerId" id="Projet_RER" 					value="Projet_RER" onchange="mb.map.setOverlay();" checked >				<label for="Projet_RER">Projet RER</label></p>
            <p><img src="map/static/images/trains2016.png" width="20">			<input type="checkbox" name="layerId" id="Trains2016" 					value="Trains2016" onchange="mb.map.setOverlay();" >						<label for="Trains2016">Horaire 2016</label></p>
            <p><img src="map/static/images/lignes_bus.png" width="20">			<input type="checkbox" name="layerId" id="TP_lignes_bus_principales" 	value="TP_lignes_bus_principales" onchange="mb.map.setOverlay();" checked>	<label for="TP_lignes_bus_principales">Lignes de bus régionales</label></p></p></p>
            <p><img src="map/static/images/projet_routier.png" width="20">		<input type="checkbox" name="layerId" id="Routes_projets_routiers" 		value="Routes_projets_routiers" onchange="mb.map.setOverlay();" >			<label for="Routes_projets_routiers">Projets routiers</label></p>
            <p><img src="map/static/images/routes_nationales.png" width="20">	<input type="checkbox" name="layerId" id="Routes_nationales" 			value="Routes_nationales" onchange="mb.map.setOverlay();" >					<label for="Routes_nationales">Routes nationales</label></p>
            <p><img src="map/static/images/routes_cantonales.png" width="20">	<input type="checkbox" name="layerId" id="Routes_cantonales" 			value="Routes_cantonales" onchange="mb.map.setOverlay();" >					<label for="Routes_cantonales">Routes cantonales</label></p>
        </div>
        <div id="featureInfo">
        </div>
        <img id="fullScreen" src="map/static/images/screen68.png" title="Plein écran" onclick="mb.map.fullScreen()">
        <img id="partScreen" src="map/static/images/center15.png" title="Réduire" onclick="mb.map.partScreen()">
    </div>
</article>
<!-- <article id="un-canton">
	<div class="wrapper clearfix">
		<div class="col_7"><img src="img/un-canton.svg" class="img-responsive" /></div>
		<div class="col_5">
			<h1>nous sommes un.<br />un canton,<br />un espace</h1>
            <p>Affirmons notre contribution à la prospérité de la Suisse. Positionnons le second canton exportateur du pays sur la carte. Dessinons sa stratégie de mobilité. <strong>mobilisons-nous!</strong></p>
			<p><a href="vision.php" class="btn">Notre vision</a></p>
		</div>
	</div>
</article>	 -->

<?php include 'common/footer.php'; ?>