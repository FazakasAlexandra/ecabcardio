 <!-- PATIETNS TABLE  -->
 <table style="width:100%">
     <tr>
         <th>NAME</th>
         <th>SURNAME</th>
         <th>CNP</th>

         <?php echo view('/patients_templates/order.php'); ?>

     <!-- FILL TABLE WITH PATIENTS DATA  -->
     <?php foreach ($patients as $patient) : ?>

         <tr>
             <td><?php echo $patient['name'] ?></td>
             <td><?php echo $patient['surname'] ?></td>
             <td><?php echo $patient['cnp'] ?></td>

             <!-- EDIT BUTTON  -->
             <td><a href="<?php echo "/ecabcardio/public/patients/edit/" . (string)$patient['id'] ?>" id="edit-patient-button"><i class="fas fa-pen"></i>EDIT PATIENT</a></td>

             <!-- CONSULT BUTTON  -->
             <td><a href="<?php echo "/ecabcardio/public/consult/" . (string)$patient['id'] ?>" id="consult-patient-button">CONSULT</a></td>

             <!-- HISTORY BUTTON  -->
             <td><a href="<?php echo "/ecabcardio/public/patients/history/" . (string)$patient['id'] ?>" id="history-patient-button"><i class="fas fa-history"></i></a></td>
         </tr>

     <?php endforeach; ?>

 </table>