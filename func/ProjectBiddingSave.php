<?php
    function load_auction_list($arr) {
        // $query = mssql_query($sql);
        // $response = array();
        // while ($row = mssql_fetch_array($query))
        // {
        //     $response[] = $row;
        // }
        // mssql_free_result($query);
        // return js_thai_encode($response);
    }

    function delete_auction_list($arr) {
        // $delete = "DELETE FROM [Progress].[dbo].[progress4] WHERE pro_id = '". $arr['code'] ."' ";

        // mssql_query($delete);
        // return $delete;
    }

    function js_thai_encode($data) {   // fix all thai elements
        if (is_array($data))
        {
            foreach($data as $a => $b)
            {
                if (is_array($data[$a]))
                {
                    $data[$a] = js_thai_encode($data[$a]);
                }
                else
                {
                    $data[$a] = iconv("tis-620","utf-8",$b);
                }
            }
        }
        else
        {
            $data =iconv("tis-620","utf-8",$data);
        }
        return $data;
    }
?>