<?php
	class Facade{
		public function findApartments($place, $divId){
			$apfinder    = new ApartmentFinder();
			$geolocator  = new GeoLocator();
			$gmap        = new GoogleMap();
			
			$apartments = $apfinder-> locateApartments($place);
			foreach($apertments as $apertment){
				$locations[]= $geolocator->getLocations($apertment);
			}
			$gmap->initialize();
			$gmap->drawLocation($location);
			$gmap->dispatch($divId);
		}
	}
?>