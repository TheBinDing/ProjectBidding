<?php
    function load_auction_list($arr) {
        $sql = "SELECT
                    id,
                    site,
                    owner,
                    value,
                    thinks,
                    offer,
                    announce,
                    bargain,
                    yes,
                    no,
                    couclude,
                    annotation
                FROM
                    [ProjectBibding].[dbo].[auction] ";

        $query = mssql_query($sql);
        $response = array();
        while ($row = mssql_fetch_array($query))
        {
            $response[] = $row;
        }
        mssql_free_result($query);
        return js_thai_encode($response);
    }

    function add_auction($arr) {
        $sql = "INSERT INTO [ProjectBibding].[dbo].[auction]
                    (
                        site,
                        owner,
                        value,
                        thinks,
                        offer,
                        announce,
                        bargain,
                        yes,
                        no,
                        couclude,
                        annotation
                    )
                VALUES
                    (
                        '". iconv('UTF-8', 'TIS-620', $arr['site']) ."',
                        '". iconv('UTF-8', 'TIS-620', $arr['owner']) ."',
                        '". $arr['value'] ."',
                        '". iconv('UTF-8', 'TIS-620', $arr['thinks']) ."',
                        '". iconv('UTF-8', 'TIS-620', $arr['offer']) ."',
                        '". iconv('UTF-8', 'TIS-620', $arr['announce']) ."',
                        '". iconv('UTF-8', 'TIS-620', $arr['bargain']) ."',
                        '". $arr['yes'] ."',
                        '". $arr['no'] ."',
                        '". $arr['couclude'] ."',
                        '". iconv('UTF-8', 'TIS-620', $arr['annotation']) ."'
                    ) ";

        mssql_query($sql);
    }

    function load_auction_ae($arr) {
        $sql = "SELECT
                    id,
                    site,
                    owner,
                    value,
                    thinks,
                    offer,
                    announce,
                    bargain,
                    yes,
                    no,
                    couclude,
                    annotation
                FROM
                    [ProjectBibding].[dbo].[auction]
                WHERE
                    id = '". $arr['id'] ."' ";

        $query = mssql_query($sql);
        $response = array();
        while ($row = mssql_fetch_array($query))
        {
            $response[] = $row;
        }
        mssql_free_result($query);
        return js_thai_encode($response);
    }

    function update_auction($arr) {
        $sql =" UPDATE
                    [ProjectBibding].[dbo].[Auction]
                SET
                    site = '". iconv('UTF-8', 'TIS-620', $arr['site']) ."',
                    owner = '". iconv('UTF-8', 'TIS-620', $arr['owner']) ."',
                    value = '". $arr['value'] ."',
                    thinks = '". iconv('UTF-8', 'TIS-620', $arr['thinks']) ."',
                    offer = '". iconv('UTF-8', 'TIS-620', $arr['offer']) ."',
                    announce = '". iconv('UTF-8', 'TIS-620', $arr['announce']) ."',
                    bargain = '". iconv('UTF-8', 'TIS-620', $arr['bargain']) ."',
                    yes = '". $arr['yes'] ."',
                    no = '". $arr['no'] ."',
                    couclude = '". $arr['couclude'] ."',
                    annotation = '". iconv('UTF-8', 'TIS-620', $arr['annotation']) ."'
                WHERE
                    id = '". $arr['id'] ."' ";

        mssql_query($sql);
    }

    function delete_auction($arr) {
        $delete = "DELETE FROM [ProjectBibding].[dbo].[auction] WHERE id = '". $arr['id'] ."' ";

        mssql_query($delete);
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