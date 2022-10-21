## Installation

1. Install the package using composer

```
composer require bukharibaba/csv-exporter
```
``

2. Set your heading, data and filemane then Create object of Export class and call the function with some params

```
$heading = array('Name', 'Email', 'Phone'); // heading of the csv file

// Users list
$data = array(
            array("Mark", "mark@gmail.com", "285235232345"),
            array("Candi", "candy@gmail.com", "0134238472"),
            array("Seon", "seon@gmail.com", "09826343424"),
            array("Roby", "roby@gmail.com", "0632423243"),
            array("Janey", "janey@gmail.com", "1932738234"),
            array("John", "john@gmail.com", "0234234723"),
            array("Nomi", "nomi@gmail.com", "9804586450")
        );

$filename = "users";   // name of the file
 $export = new Export(); // creating object of Export Class 
 $path = $export->export($heading, $data, $filename); // call the function in response you will get csv file path.
 return response()->download($path); // download file using laravel standard method
 
```
