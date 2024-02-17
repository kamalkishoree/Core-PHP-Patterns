<?php
$rows=
$n = 8;
echo "<pre>";
for($i=0; $i<$n;$i++)
{
    echo "&nbsp;&nbsp";
    for($j=0;$j<$i;$j++)
    {
        echo "&nbsp*";
    }
    echo "<br>";
}


for($i = 0 ;$i<$n;$i++)
{
    for($j=$n;$j>$i;$j--)
    {
        echo "&nbsp*";

    }
    echo "<br>";

}

echo "<pre>";

for($i=0; $i<$n;$i++)
{

    for($j=$n;$j>$i;$j--)
    {
        echo "&nbsp&nbsp";
    }

    echo "&nbsp;&nbsp";
    for($j=0;$j<$i;$j++)
    {
        echo "&nbsp*";
    }
    echo "<br>";
}

DELETE FROM users
WHERE id NOT IN (
    SELECT MIN(id)
    FROM users
    GROUP BY email
);
SELECT email, GROUP_CONCAT(DISTINCT id) AS ids_with_same_email FROM users GROUP BY email;


DELETE e1
FROM Emails e1, Emails e2
WHERE e1.id > e2.id
AND e1.email = e2.email;

SELECT GROUP_CONCAT(DISTINCT(u1.id)),u1.email FROM users u1 JOIN users u2 on u1.email = u2.email where u1.id > u2.id;
SELECT * FROM (
    SELECT email, id, DENSE_RANK() OVER (ORDER BY id DESC) AS r
    FROM users
  ) AS subquery
  WHERE r = 3;  



  a1bc23def456<?php
  $str1 = "abcdef";
  $str2 = "123456";
  $data = [];
  
  function combineData($str1,$str2)
  {
      $count = (strlen($str1) > strlen($str2)) ?strlen($str1):strlen($str2);
  $i=0;
    while($i<$count)
     { 
       for($j=0;$j<$i+1;$j++)
       {
         $data[] = @$str1[$i+$j];
       }
        for($j=0;$j<$i+1;$j++)
       {
         $data[] = @$str2[$i+$j];
       }
       $i = $i+$j;
     }
     echo implode('',$data);
  }
  
  echo combineData($str1,$str2);
  
  
  
  ?>