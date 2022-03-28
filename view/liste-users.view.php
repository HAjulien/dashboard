<?php include('view/layout/head.inc.php'); ?> 

<?php include('view/layout/nav.inc.php'); ?> 

<?php include('view/layout/sideNav.inc.php'); ?> 

<?php include('view/layout/tables-links.inc.php'); ?> 


                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>nom login</th>
                                            <th>nom utilisateur</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>nom login</th>
                                            <th>nom utilisateur</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach ($data as $onedata){ ?>
                                        <tr>
                                            <td><?= $onedata["ID"] ?></td>
                                            <td><?= $onedata["user_login"] ?></td>
                                            <td><?= $onedata["display_name"] ?></td>
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