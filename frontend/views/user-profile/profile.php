<div class="container">
  <h2>หน้าที่2เด้อย้านบ่รู้</h2>
            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Tle</th>
        <th>E-mail</th>
        <th>Sex</th>

      </tr>
        <tr>
        
            <td class="active"><?= $users['fname']?></td>
            <td class="success"><?= $users['laname']?></td>
            <td class="warning"><?= $users['tle']?></td>
            <td class="danger"><?= $users['email']?></td>
            <td class="info"><?= $users['men']?></td>
        </tr>
        <tr>
        
            <td class="active"><?= $users['fname']?></td>
            <td class="success"><?= $users['laname']?></td>
            <td class="warning"><?= $users['tle']?></td>
            <td class="danger"><?= $users['email']?></td>
            <td class="info"><?= $users['men']?></td>   
        </tr>
        
    </thead>   
  </table>
 
<br>
<a class="btn btn-lg btn-warning"href="<?= \yii\helpers\Url::to(['user-profile/conn'])?>">ไปโลด</a> 