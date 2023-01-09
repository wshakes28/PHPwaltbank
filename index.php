<?php

declare(strict_types=1);



class Customer
{
    public string $forename;
    public string $surname;
    public string $email;
    public string $password;
}

class Account
{
    public int $number;
    public string $type;
    public float $balance;

    public function deposit(float $amount): float
    {
        $this->balance += $amount;
        return $this->balance;
    }
    public function withdraw(float $amount): float
    {
        $this->balance -= $amount;
        return $this->balance;
    }
}

$account = new Account();

$account->number = 1000000;
$account->type = 'Savings';
$account->balance = 1000.00;

$customer = new Customer();

$customer->forename = 'Walter';
$customer->surname = 'Williams';
$customer->email = "example@gmail.com";
$customer->password = "password";

$account2 = new Account();

$account2->number = 2000000;
$account2->type = 'Checking';
$account2->balance = 2000.00;

$customer2 = new Customer();

$customer2->forename = 'Walt';
$customer2->surname = 'Programmer';
$customer2->email = "webmaster@gmail.com";
$customer2->password = "password2";

$account3 = new Account();

$account3->number = 3000000;
$account3->type = 'Savings';
$account3->balance = 3000.00;

$customer3 = new Customer();

$customer3->forename = 'Batman';
$customer3->surname = 'Darknight';
$customer3->email = "batman@gmail.com";
$customer3->password = "password3";

$account4 = new Account();

$account4->number = 4000000;
$account4->type = 'Checking';
$account4->balance = 4000.00;

$customer4 = new Customer();

$customer4->forename = 'Super';
$customer4->surname = 'Man';
$customer4->email = "superman@gmail.com";
$customer4->password = "password4";







?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="styles.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="https://cdn.pixabay.com/photo/2017/10/25/19/46/piggy-bank-2889046__340.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <h1 class="section-title center mb-2">Walter Bank</h1>
    <div class="container ">
        <table class="table mx-auto">
            <thead>
                <tr class="table-warning">
                    <th scope="col">CUSTOMERS</th>
                    <th scope="col"><?= $customer->forename ?><span> </span><?= $customer->surname ?></th>
                    <th scope="col"><?= $customer2->forename ?><span> </span><?= $customer2->surname ?></th>
                    <th scope="col"><?= $customer3->forename ?><span> </span><?= $customer3->surname ?></th>
                    <th scope="col"><?= $customer4->forename ?><span> </span><?= $customer4->surname ?></th>
                </tr>
            </thead>

            <tbody>

                <tr class="table-lightgreen">
                    <th scope="col">EMAIL</th>
                    <th scope="col"><?= $customer->email ?></th>
                    <th scope="col"><?= $customer2->email ?></th>
                    <th scope="col"><?= $customer3->email ?></th>
                    <th scope="col"><?= $customer4->email ?></th>
                </tr>

                <tr class="table-warning">
                    <th scope="col">PASSWORD</th>
                    <th scope="col"><?= $customer->password ?></th>
                    <th scope="col"><?= $customer2->password ?></th>
                    <th scope="col"><?= $customer3->password ?></th>
                    <th scope="col"><?= $customer4->password ?></th>
                </tr>

                <tr class="table-lightgreen">
                    <th scope="col">Account Number</th>
                    <th scope="col"><?= $account->number ?></th>
                    <th scope="col"><?= $account2->number ?></th>
                    <th scope="col"><?= $account3->number ?></th>
                    <th scope="col"><?= $account4->number ?></th>
                </tr>

                <tr class="table-warning">
                    <th scope="col">Account Type</th>
                    <th scope="col"><?= $account->type ?></th>
                    <th scope="col"><?= $account2->type ?></th>
                    <th scope="col"><?= $account3->type ?></th>
                    <th scope="col"><?= $account4->type ?></th>
                </tr>

                <tr class="table-lightgreen">
                    <th scope="col">Account Balance</th>
                    <th scope="col"><?= $account->deposit(50.00) ?></th>
                    <th scope="col"><?= $account2->withdraw(100.00) ?></th>
                    <th scope="col"><?= $account3->deposit(100.00) ?></th>
                    <th scope="col"><?= $account4->withdraw(250.00) ?></th>
                </tr>



            </tbody>

        </table>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous" defer></script>

</html>