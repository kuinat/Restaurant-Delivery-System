

<div class="wrap">

	<h2><?php echo esc_html( $page_title ); ?></h2>

	<table border="2">
  <thead>
    <tr>
      <th>Order Id</th>
      <th>Transaction Id</th>
    </tr>
  </thead>
  <tbody>
    <?php
    echo $_SERVER['DOCUMENT_ROOT'].'/restaurant/wp-content/plugins/example-me-master/database-connector.php';
    //C:\xampp\htdocs\restaurant\wp-content\plugins\example-me-master\database-connector.php
    //include($_SERVER['DOCUMENT_ROOT'].'/restaurant/wp-content/plugins/example-me-master/');
    //include 'database-connector.php'; 

    $data = new Database; 

    //include($_SERVER['DOCUMENT_ROOT'].'/restaurant/wp-content/plugins/example-me-master');
    echo "222222222222222222222222222222";
    $records = mysqli_query($data->con,"select * from order_transaction_ids"); // fetch data from database
    echo "333333333333333";
    while($data = mysqli_fetch_array($records))
    {
    ?>
      <tr>
        <td><?php echo $data['order_id']; ?></td>
        <td><?php echo $data['transaction_id']; ?></td>
      </tr>	
    <?php
    }
    ?>
   
    </tbody>
    </table>
   
  
</div> <!-- .wrap -->
