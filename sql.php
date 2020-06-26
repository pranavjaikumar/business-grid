<?php
    $link = mysqli_connect("localhost", "root", "root", "business_grid");
    if (!$link) {
        echo 'FAILURE';
    } else {
        mysqli_query($link, "TRUNCATE TABLE users");
        mysqli_query($link, "TRUNCATE TABLE startup_profile");
        mysqli_query($link, "TRUNCATE TABLE bp_profile");
        mysqli_query($link, "TRUNCATE TABLE ai_profile");
        for ($i = 0; $i < 300; $i++) {
            $first_name = "test";
            $last_name = strval($i);
            $email = $first_name . $last_name . "@gmail.com";
            $password = password_hash("password", PASSWORD_BCRYPT);
            $rand = rand(1, 3);
            $type;
            switch ($rand) {
                case 1:
                    $type = "Startup";
                    break;
                case 2:
                    $type = "Business Professional";
                    break;
                case 3:
                    $type = "Angel Investor";
                    break;
            }
            mysqli_query($link, "INSERT INTO users (first_name, last_name, email, password, type) VALUES ('$first_name', '$last_name', '$email', '$password', '$type')");
            $query = mysqli_query($link, "SELECT * FROM users WHERE email = '$email'");
            $row = mysqli_fetch_array($query);
            $id = $row['id'];
            $experience;
            $sector;
            $strategy;
            $service;
            switch ($rand) {
                case 1:
                    $name = $first_name . $last_name;
                    switch (rand(1, 3)) {
                        case 1:
                            $experience = "Less than 6 months";
                            break;
                        case 2:
                            $experience = "6 months to 2 years";
                            break;
                        case 3:
                            $experience = "2 years +";
                            break;
                    }
                    switch (rand(1, 9)) {
                        case 1:
                            $sector = "Technology";
                            break;
                        case 2:
                            $sector = "E-commerce";
                            break;
                        case 3:
                            $sector = "Retail";
                            break;
                        case 4:
                            $sector = "Life Sciences";
                            break;
                        case 5:
                            $sector = "Fashion";
                            break;
                        case 6:
                            $sector = "Consumer Products";
                            break;
                        case 7:
                            $sector = "Food and Beverage";
                            break;
                        case 8:
                            $sector = "Finanial Services";
                            break;
                        case 9:
                            $sector = "Travel and Transportation";
                            break;
                    }
                    switch (rand(1, 4)) {
                        case 1:
                            $strategy = "I need resources to make my idea a reality";
                            break;
                        case 2:
                            $strategy = "I need expertise to better my startup";
                            break;
                        case 3:
                            $strategy = "I need resources to make my idea a reality";
                            break;
                        case 4:
                            $strategy = "I need expertise to better my startup";
                            break;
                    }
                    $earnings = rand(0, 250000);
                    $spending = rand(0, 250000);
                    switch (rand(1, 8)) {
                        case 1:
                            $service = "Copywriter";
                            break;
                        case 2:
                            $service = "Business Advisor";
                            break;
                        case 3:
                            $service = "Risk Analysis";
                            break;
                        case 4:
                            $service = "Marketing";
                            break;
                        case 5:
                            $service = "Writer";
                            break;
                        case 6:
                            $service = "Website Design";
                            break;
                        case 7:
                            $service = "Graphic Design";
                            break;
                        case 8:
                            $service = "Tech Support";
                            break;
                    }
                    mysqli_query($link, "INSERT INTO startup_profile VALUES ('$id', '$experience', '$sector', '$strategy', '$earnings', '$spending', '$service', '$name')");
                    break;
                case 2:
                    switch (rand(1, 3)) {
                        case 1:
                            $experience = "University Student";
                            break;
                        case 2:
                            $experience = "1 - 5 years of experience ";
                            break;
                        case 3:
                            $experience = "5 years + experience";
                            break;
                    }
                    switch (rand(1, 9)) {
                        case 1:
                            $sector = "Technology";
                            break;
                        case 2:
                            $sector = "E-commerce";
                            break;
                        case 3:
                            $sector = "Retail";
                            break;
                        case 4:
                            $sector = "Life Sciences";
                            break;
                        case 5:
                            $sector = "Fashion";
                            break;
                        case 6:
                            $sector = "Consumer Products";
                            break;
                        case 7:
                            $sector = "Food and Beverage";
                            break;
                        case 8:
                            $sector = "Finanial Services";
                            break;
                        case 9:
                            $sector = "Travel and Transportation";
                            break;
                    }
                    $payment;
                    switch (rand(1,2)) {
                        case 1:
                            $payment = "Hourly";
                            break;
                        case 2:
                            $payment = "Equity: Stake in the company";
                            break;
                    }
                    $employer = "Company" . strval($i);
                    $title = "Employee" . strval($i);
                    switch (rand(1, 8)) {
                        case 1:
                            $service = "Copywriter";
                            break;
                        case 2:
                            $service = "Business Advisor";
                            break;
                        case 3:
                            $service = "Risk Analysis";
                            break;
                        case 4:
                            $service = "Marketing";
                            break;
                        case 5:
                            $service = "Writer";
                            break;
                        case 6:
                            $service = "Website Design";
                            break;
                        case 7:
                            $service = "Graphic Design";
                            break;
                        case 8:
                            $service = "Tech Support";
                            break;
                    }
                    mysqli_query($link, "INSERT INTO bp_profile VALUES ('$id', '$experience', '$sector', '$payment', '$employer', '$title', '$service')");
                    break;
                case 3:
                    switch (rand(1, 3)) {
                        case 1:
                            $experience = "I consistently invest in Startups";
                            break;
                        case 2:
                            $experience = "I have invested in Startups before";
                            break;
                        case 3:
                            $experience = "I have no experience, but I want to get started";
                            break;
                    }
                    switch (rand(1, 9)) {
                        case 1:
                            $sector = "Technology";
                            break;
                        case 2:
                            $sector = "E-commerce";
                            break;
                        case 3:
                            $sector = "Retail";
                            break;
                        case 4:
                            $sector = "Life Sciences";
                            break;
                        case 5:
                            $sector = "Fashion";
                            break;
                        case 6:
                            $sector = "Consumer Products";
                            break;
                        case 7:
                            $sector = "Food and Beverage";
                            break;
                        case 8:
                            $sector = "Finanial Services";
                            break;
                        case 9:
                            $sector = "Travel and Transportation";
                            break;
                    }
                    switch (rand(1, 3)) {
                        case 1: 
                            $commitment="Short Term: Less than 6 months ROI";
                            break;
                        case 2: 
                            $commitment="Long Term: 6 months to 2 years";
                            break;
                        default: 
                            $commitment="Equity: Stake in the company";
                    }
                    $employer = "Company" . strval($i);
                    $title = "Employee" . strval($i);
                    switch (rand(1, 5)) {
                        case 1:
                            $investment = "Up to $1,000";
                            break;
                        case 2:
                            $investment = "Up to $5,000";
                            break;
                        case 3:
                            $investment = "Up to $10,000";
                            break;
                        case 4:
                            $investment = "Up to $501,000";
                            break;
                        case 5:
                            $investment = "$50,000+";
                            break;
                    }
                    mysqli_query($link, "INSERT INTO ai_profile VALUES ('$id', '$experience', '$sector', '$commitment', '$employer', '$title', '$investment')");
                    break;
            }
        }        
    }
    echo "Rajas lost his viriginity";
?>