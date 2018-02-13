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
                        '". $arr['site'] ."',
                        '". $arr['owner'] ."',
                        '". $arr['value'] ."',
                        '". $arr['thinks'] ."',
                        '". $arr['offer'] ."',
                        '". $arr['announce'] ."',
                        '". $arr['bargain'] ."',
                        '". $arr['yes'] ."',
                        '". $arr['no'] ."',
                        '". $arr['couclude'] ."',
                        '". $arr['annotation'] ."'
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
                    site = '". $arr['site'] ."',
                    owner = '". $arr['owner'] ."',
                    value = '". $arr['value'] ."',
                    thinks = '". $arr['thinks'] ."',
                    offer = '". $arr['offer'] ."',
                    announce = '". $arr['announce'] ."',
                    bargain = '". $arr['bargain'] ."',
                    yes = '". $arr['yes'] ."',
                    no = '". $arr['no'] ."',
                    couclude = '". $arr['couclude'] ."',
                    annotation = '". $arr['annotation'] ."'
                WHERE
                    id = '". $arr['id'] ."' ";

        mssql_query($sql);
    }

    function delete_auction_list($arr) {
        $delete = "DELETE FROM [ProjectBibding].[dbo].[auction] WHERE id = '". $arr['code'] ."' ";

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