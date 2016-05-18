   if($price == 10003000) {
            $price_type = array(
                'location' => $location,
                'price <' => 3001,
                'price >' => 999
            );
            $only_price_type = $this->housesearch_model->get_locations_where_price_and_type_is_same($price_type);
            print_r($only_price_type);

        }
        else if($price == 30015000) {
            $price_type = array(
                'location' => $location,
                'price <' => 5001,
                'price >' => 3000
            );
            $only_price_type = $this->housesearch_model->get_locations_where_price_and_type_is_same($price_type);
            print_r($only_price_type);

        }
        else if($price == 500110000) {
            $price_type = array(
                'location' => $location,
                'price <' => 10001,
                'price >' => 5000
            );
            $only_price_type = $this->housesearch_model->get_locations_where_price_and_type_is_same($price_type);
            print_r($only_price_type);

        }
        else if($price == 1000115000) {
            $price_type = array(
                'location' => $location,
                'price <' => 15001,
                'price >' => 999
            );
            $only_price_type = $this->housesearch_model->get_locations_where_price_and_type_is_same($price_type);
            print_r($only_price_type);

        }
        else if($price == 1500120000) {
            $price_type = array(
                'location' => $location,
                'price <' => 20001,
                'price >' => 15000
            );
            $only_price_type = $this->housesearch_model->get_locations_where_price_and_type_is_same($price_type);
            print_r($only_price_type);

        }
        else if($price == "above20") {

            $price_type = array(
                'location' => $location,
                'price >' => 20000
            );
            $only_price_type = $this->housesearch_model->get_locations_where_price_and_type_is_same($price_type);
            print_r($only_price_type);
        }