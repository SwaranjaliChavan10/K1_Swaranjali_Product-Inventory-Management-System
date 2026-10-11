<?php
include "db.php";


$user_id = $_SESSION['user_id'];
if($_SERVER["REQUEST_METHOD"]==="POST") {
    $pname=$_POST["pname"];
    $pcategory=$_POST["pcategory"];
    $pprice=$_POST["pprice"];
    $pquantity=$_POST["pquantity"];
    $pdes=$_POST["pdes"];

    $sql=$conn->prepare("insert into product(pname,pcategory,pprice,pquantity,pdes,user_id) values(?,?,?,?,?,?)");
    $sql->bind_param("ssdisi",$pname,$pcategory,$pprice,$pquantity,$pdes,$user_id);
    if ($sql->execute()) {
        header("Location:dashboard.php");
        exit();
    }

}
$sql=$conn->prepare("select * from product where user_id=?");
$sql->bind_param("i",$user_id);
$sql->execute();

$result=$sql->get_result();
?>


<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
          <nav
            class="navbar navbar-expand-sm navbar-light bg-light"
          >
            <div class="container">
                <a class="navbar-brand" href="#"><h3>Hello <?php echo $_SESSION["uname"]?></h3>
</a>
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" aria-current="page"
                                >Home
                                <span class="visually-hidden">(current)</span></a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            
                          
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0" action="pdf.php">
                       
                        <button
                            class="btn btn-outline-success my-2 my-sm-0 me-3"
                            type="submit"
                        >
                            Generate PDF
                        </button>
                         </form>
                        <form class="d-flex my-2 my-lg-0" action="csv.php">
                       
                        <button
                            class="btn btn-outline-success my-2 my-sm-0 me-3"
                            type="submit"
                        >
                            Generate CSV
                        </button>

                        </form>
                     <a
                        name=""
                        id=""
                        class="btn btn-primary"
                        href="logout.php"
                        role="button"
                        >Logout</a
                     >
                     
                        
                   
                </div>
            </div>
          </nav>
          
        </header>
        <main>
          <h2 class="text-center mt-3">Add Products</h2>

                     <div
                class="container col-6 border rounded p-3 shadow"
            >
             <form action="" method="POST">
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="pname"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">Product Name</label>                    
                </div>

                  
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="pcategory"
                        id="formId3"
                        placeholder=""
                    />
                    <label for="formId3">Product Category</label>
                </div>

                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="pprice"
                        id="formId2"
                        placeholder=""
                    />
                    <label for="formId2">Product Price</label>
                </div>
                
                
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="pquantity"
                        id="formId4"
                        placeholder=""
                    />
                    <label for="formId4">Product Quantity</label>
                </div>

                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="pdes"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">Description</label>
                </div>
                

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Submit
                </button>                

             </form>
                
            </div>
            
            <h2 class="text-center mt-5">Product Dashboard</h2>
            <div
                class="container"
            >
            <div
                class="table-responsive"
            >
                <table
                    class="table table-primary"
                >
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Category</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Price Quantity</th>
                              <th scope="col">Description</th>
                            <th scope="col">Action</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php while($row = $result-> fetch_assoc()){ ?>

                    <tbody>
                        <tr class="">
                            <td scope="row"><?= $row['id'] ?></td>
                            <td><?= $row['pname'] ?></td>
                            <td><?= $row['pcategory'] ?></td>
                            <td><?= $row['pprice'] ?></td>
                            <td><?= $row['pquantity'] ?></td>
                            <td><?= $row['pdes'] ?></td>
                            <td><a
                                name=""
                                id=""
                                class="btn btn-primary"
                                href="edit.php?id=<?= $row['id'] ?>"
                                role="button"
                                >Edit</a
                            >
                            </td>
                             <td><a
                                name=""
                                id=""
                                class="btn btn-primary"
                                href="delete.php?id=<?= $row['id'] ?>"
                                onclick="return confirm('Are you sure you want to delete the product?  ')";
                                role="button"
                                >Delete</a
                            >
                            
                            </td>
                        </tr>

                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
                    
        </div>
            

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
