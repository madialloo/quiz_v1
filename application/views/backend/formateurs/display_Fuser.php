
        <!-- page content  -->
        <div class="jumbotron">
          <h4>Bienvenue  <?php echo $this->session->userdata('cpt_pseudo');?></h4>

                <div class="table-responsive"> 
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Pseudo</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Type</th>
                                <th>Actif</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--  start display all users data  -->
                            <?php foreach($users as $user): ?>
                                        <tr>
                                            <td><?php echo $user["CPT_PSEUDO"]; ?></td>
                                            <td><?php echo $user["CPT_NOM"]; ?></td>
                                            <td><?php echo $user["CPT_PRENOM"]; ?></td>
                                            <td><?php echo $user["CPT_TYPE"]; ?></td>
                                            <td><?php echo $user["CPT_ACTIF"]; ?></td>
                                        </tr>
                            <?php endforeach; ?>
                            <!-- end display all users data  -->
                        </tbody>
                     </table>
                </div>
        </div>
