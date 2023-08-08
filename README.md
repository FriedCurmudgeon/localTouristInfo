
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
- [TinyMCE](https://www.tiny.cloud/) (optional)
- [Parsedown.js](https://github.com/erusev/parsedown)
- [BuyMeACoffee](https://buymeacoffee.com/tngld) (optional)
- [Ratufa.io](https://ratufa.io) (optional)
- (more?)

## ToDo
- ~~Add toggle TinyMCE.~~ (implemented)
- ~~Add ability to define start coordinates in settings. This is now hard-coded.~~  (implemented)
- Customizable menu
- Maybe something else.

## Screenshots
![2023-08-08_13-23-51](https://github.com/FriedCurmudgeon/localTouristInfo/assets/7045588/b2237010-c144-4890-bfd1-4cebf282a832)
![2023-08-08_13-24-14](https://github.com/FriedCurmudgeon/localTouristInfo/assets/7045588/fbb415e8-93d2-441d-bd7a-c421fa01ac09)
![2023-08-08_13-24-33](https://github.com/FriedCurmudgeon/localTouristInfo/assets/7045588/d8887a2f-f92b-4116-b48d-4e915ab16d3f)
![2023-08-08_13-37-42](https://github.com/FriedCurmudgeon/localTouristInfo/assets/7045588/29dedb51-9e80-4355-ba70-604d8ef580f2)
![2023-08-08_13-38-07](https://github.com/FriedCurmudgeon/localTouristInfo/assets/7045588/dd9f388b-0b9e-41a4-8892-60c1a675349e)
![2023-08-08_13-41-27](https://github.com/FriedCurmudgeon/localTouristInfo/assets/7045588/c907d663-f1a6-46dd-b3b5-e7c0f6597f34)
