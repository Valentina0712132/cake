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
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </head>
    <body>
    <center>
        <form id="f1" name="f1" method="post" action='0506z-basicdb9.php'>
    <div id="dv1" style="width: 1000px; height: 350px; overflow: scroll">
    <table border='0' width='1000' height="400">
        <?php
        $id="";
        $name="";
        $k1="";
        $k2="";
        $k3="";
        $mobile="";
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
            
            //查詢
            if(isset($_POST['ksb1']))
            {
                $kt1=$_POST['kt1'];
                $sql="select * from productdata1 where 編號='".$kt1."' ";
                require_once ('0429z-dbselectcom.php');
                $db=new dbselectsystem();
                $db->setQuery("theorydb1", $sql);
                $dataqt=$db->getQueryResult();
                $plenqt=count($dataqt);
                
                $id=$dataqt[0][0];
                $name=$dataqt[0][1];
                $k1=$dataqt[0][2];
                $k2=$dataqt[0][3];
                $k3=$dataqt[0][4];
                $mobile=$dataqt[0][5];
            }
         //圖表一
            if(isset($_POST['chartid1']))
            {
                $kt1=$_POST['kt1'];
                $sql="select * from productdata1 where 編號='".$kt1."' ";
                require_once ('0429z-dbselectcom.php');
                $db=new dbselectsystem();
                $db->setQuery("theorydb1", $sql);
                $dataqt=$db->getQueryResult();
                $plenqt=count($dataqt);
                
                $kc1=$dataqt[0][2];
                $kc2=$dataqt[0][3];
                $kc3=$dataqt[0][4];

                $dataPoints =array(
                    array("y" => $kc1, "label" => "北區業務"),
                    array("y" => $kc2, "label" => "中區業務"),
                    array("y" => $kc3, "label" => "南區業務"));
            }
            
            //圖表二
            if(isset($_POST['chartid2']))
            {
                $kt1=$_POST['kt1'];
                $sql="select * from productdata1 where 編號='".$kt1."' ";
                require_once ('0429z-dbselectcom.php');
                $db=new dbselectsystem();
                $db->setQuery("theorydb1", $sql);
                $dataqt=$db->getQueryResult();
                $plenqt=count($dataqt);
                
                $kc1=$dataqt[0][2];
                $kc2=$dataqt[0][3];
                $kc3=$dataqt[0][4];

                $dataPoints =array(
                    array("y" => $kc1, "label" => "北區業務"),
                    array("y" => $kc2, "label" => "中區業務"),
                    array("y" => $kc3, "label" => "南區業務"));
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
                    echo "<td><a href='0506z-basicdb9.php?t1=".$data2[$i][0]."'>編輯</a></td>";
                }
            }
            else
            {
                echo "<td><a href='0506z-basicdb9.php?t1=".$data2[$i][0]."'>編輯</a></td>";
            }
            echo "<td><a href='0506z-basicdb9.php?t1=".$data2[$i][0]."'>刪除</a></td>";
            echo "</tr>";
        }
        echo "</tbody>";

        ?>
    </table>
    </div>
            <p>
    <table border="0" width="1000" height="300">
        <tr>
            <td>
                編號:<input type="text" id="kt1" name="kt1" size="50" value="<?php echo $id ?>">
            </td>
            <td>
                <input type="submit" id="ksb1" name="ksb1" value="查詢" style="width: 150px" >
            </td>
            <td>
                <input type="submit" id="ksb2" name="ksb2" value="清除" style="width: 150px" >
            </td>
        </tr>
        <tr>
            <td>
                負責人:<input type="text" id="kt2" name="kt2" size="50" value="<?php echo $name ?>">
            </td>
            <td colspan="2">
                北區業務:<input type="text" id="kt3" name="kt3" size="50" value="<?php echo $k1 ?>">
            </td>
        </tr>
        <tr>
            <td>
                中區業務:<input type="text" id="kt4" name="kt4" size="50" value="<?php echo $k2 ?>">
            </td>
            <td  colspan="2">
                南區業務:<input type="text" id="kt5" name="kt5" size="50" value="<?php echo $k3 ?>">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                特勤電話:<input type="text" id="kt6" name="kt6" size="100" value="<?php echo $mobile ?>">
            </td>
        </tr>
    </table>
   <p>
   <table border="0" width="1000" height="250">
       <tr>
           <td>
                <input type="submit" id="chartid1" name="chartid1" value="圖表一"style="width: 100px; height: 100px" >
           </td>
           <td rowspan="2" align="center"> 
              <?php
                if(isset($_POST['chartid1']))
                {
                ?>
                <script language="javascript">
                        window.onload = function () {

                                var chart = new CanvasJS.Chart("chartContainer", {
                                        title: {
                                                text: "折線圖圖表"
                                        },
                                        axisY: {
                                                title: "抬頭數值"
                                        },
                                        data: [{
                                                type: "line",
                                                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                                        }]
                                });
                                chart.render();

                      }
                </script>
                
                <div id="chartContainer" style="height: 250px; width: 500px;"></div>
                <?php
                }
                else
                {
                ?>
                    <img src="images/lemon.jpg" width="500" height="250"/>
                <?php
                }
                ?>
                <?php
                if(isset($_POST['chartid2']))
                {
                ?>
                <script language="javascript">
                    
                    window.onload = function() {

                    var chart = new CanvasJS.Chart("chartContainer", {
                            animationEnabled: true,
                            theme: "light2",
                            title:{
                                    text: "北中南區業務"
                            },
                            axisY: {
                                    title: "人數"
                            },
                            data: [{
                                    type: "column",
                                    yValueFormatString: "#,##0.## tonnes",
                                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                            }]
                    });
                    chart.render();

                    }
                </script>
                
                <div id="chartContainer" style="height: 250px; width: 500px;"></div>
                <?php
                }
                ?>
                <?php
                if(empty(isset($_POST['chartid1'])) && empty(isset($_POST['chartid2'])))
                {
                ?>
                <img src="images/lemon.jpg" width="500" height="250"/>
                <?php
                }
                ?>
           </td>
       </tr>
       <tr>
           <td>
                <input type="submit" id="chartid2" name="chartid2" value="圖表二" style="width: 100px; height: 100px" >
           </td>
       </tr>
   </table>

   <p>

</form>
</center>
    </body>
</html>
