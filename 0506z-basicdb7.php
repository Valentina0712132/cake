<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form id="f1" name="f1" method="get" action='0506z-basicdb7.php'>
            <div id="dv1" style="width: 1000px; height: 350px; overflow: scroll">
    <table border='0' width='1000' height="400">
        <?php
        //增刪修元件裝置
        //修改
        if(isset($_POST['s1']))
            {
               $id=$_POST['t1'];
               $name=$_POST['t2'];
               $k1=$_POST['t3'];
               $k2=$_POST['t4'];
               $k3=$_POST['t5'];
               $mobile=$_POST['t6'];
               
               require_once ('0429z-dbmodifycom.php');
               $db=new dbmodifysystem();
               
               $sql="update productdata1 set 負責人='".$name."',北區業務=".$k1.",中區業務=".$k2.",南區業務=".$k3.",特勤電話='".$mobile."' where 編號='".$id."'";
               $result=$db->setModify("theorydb1", $sql);
            }
            
        //刪除
        if(isset($_POST['s1']))
            {
               $id=$_POST['t1'];    
               require_once ('0429z-dbmodifycom.php');
               $db=new dbmodifysystem();
               
               $sql="delete from productdata1 where 編號='".$id."' ";
               $result=$db->setModify("theorydb1", $sql);
            }
        
        
        //資料庫連線裝置
        require_once ('0429z-dbselectcom.php');
        $db=new dbselectsystem();
        $db->setQuery("theorydb1","select * from productdata1");
        $data=$db->getFieldResult();
        $rlen=count($data);
        
      
        echo "<thead>";
        echo "<tr>";
        for($u=0;$u<$rlen;$u++)
        {
            echo "<td bgcolor='gold'>".$data[$u]."</td>";
        }
        echo "<td colspan='2' bgcolor='gold'>功能</td>";
        echo "</tr>";
        echo "</thead>";

        $xid="";                
        $data2=$db->getQueryResult();
        $len1=count($data2);
        $len2=count($data2[0]);
        
        echo "<tbody>";
        for($i=0;$i<$len1;$i++)
        {
            $xid="";   
            echo "<tr height='50'>";
            for($j=0;$j<$len2;$j++)
            {
                if(!empty($_GET['t1']))
                {
                    if($data2[$i][0]==$_GET['t1'])
                    {
                        $xid=$data2[$i][0];   
                        echo "<td><input type='text' id='t1' name='t1' size='15' value='".$data2[$i][0]."'</td>";
                        echo "<td><input type='text' id='t2' name='t2' size='15' value='".$data2[$i][1]."'</td>";
                        echo "<td><input type='text' id='t3' name='t3' size='15' value='".$data2[$i][2]."'</td>";
                        echo "<td><input type='text' id='t4' name='t4' size='15' value='".$data2[$i][3]."'</td>";
                        echo "<td><input type='text' id='t5' name='t5' size='15' value='".$data2[$i][4]."'</td>";
                        echo "<td><input type='text' id='t6' name='t6' size='15' value='".$data2[$i][5]."'</td>";
                        break;
                    }
                    else
                    {
                        if($j==0)
                        {
                            echo "<td bgcolor='beige'>".$data2[$i][$j]."</td>";
                        }
                        else
                        {
                            echo "<td>".$data2[$i][$j]."</td>";
                        }
                    }
                }
                else
                {
                    if($j==0)
                    {
                        echo "<td bgcolor='beige'>".$data2[$i][$j]."</td>";
                    }
                    else
                    {
                        echo "<td>".$data2[$i][$j]."</td>";
                    }
                }
            }
            if(!empty($_GET['t1']))
            {
                if($xid==$_GET['t1'])
                {
                    echo "<td>";
                    echo "<table border='0' width='60'>";
                    echo "<tr>";
                    echo "<td><input type='submit' id='s1' name='s1' value='修改'/></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td><input type='submit' id='s2' name='s2' value='重置'/></td>";
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";
                }
                else
                {
                    echo "<td><a href='0506z-basicdb7.php?t1=".$data2[$i][0]."'>編輯</a></td>";
                }
            }
            else
            {
                echo "<td><a href='0506z-basicdb7.php?t1=".$data2[$i][0]."'>編輯</a></td>";
            }
            echo "<td><a href='0506z-basicdb7.php?t1=".$data2[$i][0]."'>刪除</a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        

        ?>
    </table>
    </div>
</form>
    </body>
</html>
