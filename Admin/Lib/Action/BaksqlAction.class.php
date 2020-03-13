 <?php

    class DatabaseAction extends Action

    {

      

    public function index()

    {

    $dbName=C('DB_NAME');

    $re=M()->query('SHOW TABLE STATUS FROM '.$dbName);

    $this->assign("re",$re);

    $this->display();

     

    }

    public function back()

    {

     

     if(empty($_POST['tablearr']))

     {

    $table=$this->getTable();

     }else

     {

    $table=explode(",",$_POST['tablearr']);

     }

     $struct=$this->bakStruct($table);

     $record=$this->bakRecord($table);

     $sqls=$struct.$record;

     $dir="./data/".date("y-m-d").".sql";

     file_put_contents($dir,$sqls);

     if(file_exists($dir))

     {

    $this->success("备份成功");

     }else

     {

    $this->error("备份失败");

     }

    }

     

    protected function getTable()

    {

     $dbName=C('DB_NAME');

     $result=M()->query('show tables from '.$dbName);

     foreach ($result as $v){

     $tbArray[]=$v['Tables_in_'.C('DB_NAME')];

     }

     return $tbArray;

    }

     

    protected function bakStruct($array)

    {

     foreach ($array as $v){

      $tbName=$v;

      $result=M()->query('show columns from '.$tbName);


      $sql.="--\r\n";

      $sql.="-- 数据表结构: `$tbName`\r\n";

      $sql.="--\r\n\r\n";

      $sql.="DROP TABLE IF EXISTS `$tbName`;\r\n";

      $sql.="create table `$tbName` (\r\n";

      $rsCount=count($result);

      foreach ($result as $k=>$v){

      $field  =       $v['Field'];

      $type   =       $v['Type'];

      $default=       $v['Default'];

      $extra  =       $v['Extra'];

      $null   =       $v['Null'];

    if(!($default=='')){

     $default='default '.$default;

    }      

      if($null=='NO'){

      $null='not null';

      }else{

      $null="null";

      }          

      if($v['Key']=='PRI'){

      $key    =       'primary key';

      }else{

      $key    =       '';

      }

    if($k<($rsCount-1)){

     $sql.="`$field` $type $null $default $key $extra ,\r\n";

    }else{

     //最后一条不需要","号

     $sql.="`$field` $type $null $default $key $extra \r\n";

    }



      }

      $sql.=") ENGINE=MyISAM DEFAULT CHARSET=utf8;\r\n\r\n";

     }

     return str_replace(',)',')',$sql);

    }

     

    protected function bakRecord($array)

    {

     

    foreach ($array as $v){

     

      $tbName=$v;

     

     $rs=M()->query('select * from '.$tbName);

     

     if(count($rs)<=0){

     continue;

     }


      $sql.="--\r\n";

      $sql.="-- 数据表中的数据: `$tbName`\r\n";

      $sql.="--\r\n\r\n";


     foreach ($rs as $k=>$v){


     $sql.="INSERT INTO `$tbName` VALUES (";

      foreach ($v as $key=>$value){

      if($value==''){

      $value='null';

      }

      $type=gettype($value);

      if($type=='string'){

      $value="'".addslashes($value)."'";

      }

      $sql.="$value," ;

      }

      $sql.=");\r\n\r\n";

    }

     }

     return str_replace(',)',')',$sql);

    }


    public function click()

    {

    $url=explode("&",$_GET['zhi']);

    $do=$url[0];

    $table=$url[1];

    switch($do)

    {

    case optimize://优化

    $rs =M()->Query("OPTIMIZE TABLE `$table` ");

    if($rs)

    {

    echo "执行优化表： $table  OK！";

    }

    else

    {

    echo "执行优化表： $table  失败，原因是：".M()->GetError();

    }

    break;

    case repair://修复

    $rs = M()->Query("REPAIR TABLE `$table` ");

    if($rs)

    {

    echo "修复表： $table  OK！";

    }

    else

    {

    echo "修复表： $table  失败，原因是：".M()->GetError();

    }

    break;

    default://结构

    $dsql=M()->Query("SHOW CREATE TABLE ".$table);

    foreach($dsql as $k=>$v)

    {

    foreach($v as $k1=>$v1)

    {

    $rs=$v1;

    }

    }

    echo trim($rs);

    }

    }

    }

    ?>
