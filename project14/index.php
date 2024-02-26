<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai Tap 3</title>
    <link rel = "stylesheet" href = "css/css.css">
</head>
<body>
    <div>
        <h4>Basic Info</h4>
        <div class = "baInfo">
            <form action = "" method = "$_POST">
                <table>
                    <tr>
                        <th>Employee ID</th>
                        <td><input type="text" name="emID" value=""></td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td><input type="text" name="lName" value=""></td>
                    </tr>
                    <tr>
                        <th>First Name</th>
                        <td><input type="text" name="fName" value=""></td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td><input type="radio" name="gender" value="Male">Male</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="radio" name="gender" value="Female">Female</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="radio" name="gender" value="XXX">XXX</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="radio" name="gender" value="ZZZ">ZZZ</td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td><input type="text" name="tit" value=""></td>
                    </tr>
                    <tr>
                        <th>Suffix</th>
                        <td><input type="text" name="suf" value=""></td>
                    </tr>
                    <tr>
                        <th>BirthDate</th>
                        <td><input type="text" name="bDate" value="">(?)</td>
                    </tr>
                    <tr>
                        <th>HireDate</th>
                        <td><input type="text" name="hDate" value=""></td>
                    </tr>
                    <tr>
                        <th>SSN # (if applicable)</th>
                        <td><input type="text" name="SSN" value=""></td>
                    </tr>
                    <tr>
                        <th>Reports To</th>
                        <td>
                            <?php
                                $reportsTo = array(
                                    "Buchanan"
                                );
                            ?>
                            <input type="number" name="rep" value="">
                            
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div>
        <h4>Contact Info</h4>
        <div class = "conInfo">
            <form action = "" method = "$_POST">
                <table>
                    <tr>
                        <th>Email</th>
                        <td><input type="text" name="email" value=""></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><input type="text" name="address" value=""></td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td><input type="text" name="city" value=""></td>
                    </tr>
                    <tr>
                        <th>Region</th>
                        <td><input type="text" name="region" value=""></td>
                    </tr>
                    <tr>
                        <th>Postal Code</th>
                        <td><input type="text" name="poCode" value=""></td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td>
                        <?php
                            $countries = array (
                            "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla", 
                            "Antigua & Barbuda",
                            "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", 
                            "Bahamas", "Bahrain",
                            "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", 
                            "Bermuda", "Bhutan",
                            "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin 
                            Islands", "Brunei",
                            "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
                            );
                            
                        ?>
                            <select id="cars" name="cars">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="fiat">Fiat</option>
                                <option value="audi">Audi</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div>
        <h4>Optional Info</h4>
        <div class = "opInfo">
            <form action = "" method = "$_POST">
                
            </form>
        </div>
    </div>
    <div class = "footer">

    </div>
</body>
</html>