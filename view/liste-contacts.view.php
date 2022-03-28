<?php include('view/layout/head.inc.php'); ?> 

<?php include('view/layout/nav.inc.php'); ?> 

<?php include('view/layout/sideNav.inc.php'); ?> 

<?php include('view/layout/tables-links.inc.php'); ?> 


                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>nom contact</th>
                                            <th>email</th>
                                            <th>téléphone</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>nom contact</th>
                                            <th>email</th>
                                            <th>téléphone</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach ($data as $onedata){ ?>
                                        <tr>
                                            <td><?= $onedata["contact_ID"] ?></td>
                                            <td><?= $onedata["contact_name"] ?></td>
                                            <td><?= $onedata["contact_email"] ?></td>
                                            <td><?= $onedata["contact_phone"] ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>






<?php include('view/layout/footer.inc.php'); ?> 

        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
