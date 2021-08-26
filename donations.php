<?php
session_start();
require_once 'includes/header.php';
?>
<div class="container">
    <h1></h1>
    <div class="row">
        <div class="col-12">
            <table class="table table-responsive table-hover border border-secondary">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Dons</th>
                        <th scope="col">Type de Dons</th>
                        <th scope="col">Date</th>
                        <th scope="col">Modification</th>
                        <th scope="col">Suppression</th>
                    </tr>
                </thead>
                <tbody>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button><i class="bi bi-pen text-success"></i></button></td>
                <td><button><i class="bi bi-trash text-danger"></i></button></td>
                </tbody>
            </table>
        </div>
    </div>
</div>