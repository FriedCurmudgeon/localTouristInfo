# localTouristInfo
A service to help tourists and locals find their way around your home town.  
Currently a work in progress.

Demo: https://visitrandaberg.no

## Set up
- Import */_SQL/db-tables.sql* into your MySQL or MariaDB.
- Edit */config/conf.php* to match your database credentials.  
- Replace */img/logo.png* with your own logo.
- Log on with user __admin__ and password __AdminPass__.
- Set up your site and add locations from the _settings_ menu. 

_Note: the first location you add (with ID 1 in the database) will be hidden to users not logged in. Will maybe change this later._

## Dependencies
- [leaflet.js](https://leafletjs.com)
- [Leaflet.ExtraMarkers](https://github.com/coryasilva/Leaflet.ExtraMarkers)
- [Bootstrap](https://getbootstrap.com/)
- [FontAwesome](https://fontawesome.com/)
- [TinyMCE](https://www.tiny.cloud/)
- [Parsedown.js](https://github.com/erusev/parsedown)
- [BuyMeACoffee](https://buymeacoffee.com/tngld)
- (more?)

## ToDo
- Add toggle TinyMCE.
- Add ability to define start coordinates in settings. This is now hard-coded.
- Maybe something else.
