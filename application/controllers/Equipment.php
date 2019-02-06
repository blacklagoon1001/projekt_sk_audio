<?php

    Class Equipment extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('equipment_model');
        }

        public function index() {

            $light = array();
            $sound = array();

            $categories = $this->equipment_model->get_equipment_categories();

            foreach($categories as $category) {

                $data = $this->equipment_model->get_equipment($category->category_id);

                if($data !== false) {
                    if($category->main_category == 1) {
                        $sound[] = array(
                            'category' => $category->name,
                            'products' => $data,
                        );
                    }  else {
                        $light[] = array(
                            'category' => $category->name,
                            'products' => $data,
                        );
                    }
                }
            }

            $data = array(
                'sound' => $sound,
                'light' => $light,
            );

            $message = $this->session->tempdata('message');
            $this->session->unset_tempdata('message');
            if(isset($message)) {
                $data['message'] = $message;
            }

            $url = $this->twig->display('/pages/equipment', $data);
            $this->session_model->check_session($url);

        }

        public function edit($id) {

            $this->session_model->check_session_no_red();

            $equipment = $this->equipment_model->get_equipment_data($id);

            $categories = $this->equipment_model->get_equipment_categories();

            $data = array(
                'id' => $id,
                'equipment' => $equipment,
                'categories' => $categories,
            );

            $message = $this->session->tempdata('message');
            $this->session->unset_tempdata('message');
            if(isset($message)) {
                $data['message'] = $message;
            }

            if($equipment == false) {
                redirect('/eqipment');
            } else {
                $this->twig->display('/pages/edit_equipment', $data);
            }
        }

        public function check_availability() {

            $this->session_model->check_session_no_red();

            $start = $_POST['start'];
            $end = $_POST['end'];

            $light = array();
            $sound = array();

            $categories = $this->equipment_model->get_equipment_categories();

            foreach($categories as $category) {

                $data = $this->equipment_model->check($start, $end, $category->category_id);

                if($data !== false) {
                    if($category->main_category == 1) {
                        $sound[] = array(
                            'category' => $category->name,
                            'category_id' => $category->category_id,
                            'products' => $data,
                        );
                    }  else {
                        $light[] = array(
                            'category' => $category->name,
                            'category_id' => $category->category_id,
                            'products' => $data,
                        );
                    }
                }
            };

            $text = '';
            $text .= '<ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="pill" href="#sound">Dźwięk</a></li>
                            <li><a data-toggle="pill" href="#light">Światło</a></li>
                        </ul>
                        <div class="tab-content">
                        <div id="sound" class="tab-pane fade in active panel_eq">
                            <ul class="nav nav-tabs">';
                                for($i=0; $i<count($sound); $i++) {
                                    if($i==0) {
                                        $text .= '<li class="active"><a data-toggle="pill" href="#category'.$sound[0]['category_id'].'">'.$sound[0]['category'].'</a></li>';
                                    } else {
                                        $text .= '<li><a data-toggle="pill" href="#category'.$sound[$i]['category_id'].'">'.$sound[$i]['category'].'</a></li>';
                                    }
                                }
                            $text .= '</ul>
                            <div class="tab-content">';
                                for($i=0; $i<count($sound); $i++) {
                                    if ($i == 0) {
                                        $text .= '<div id="category'.$sound[0]['category_id'].'" class="tab-pane fade in active">';
                                    } else {
                                        $text .= '<div id="category'.$sound[$i]['category_id'].'" class="tab-pane fade">';
                                    }
                                $text .= '<div class="panel panel-default">
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Nazwa</th>
                                                        <th>Ilość</th>
                                                        <th>Dostępność</th>
                                                        <th>Opis</th>
                                                        <th>Ilość do dodania</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>';
                                                    for($j=0; $j<count($sound[$i]['products']); $j++) {
                                                        if($sound[$i]['products'][$j]->available_quantity == 0) {
                                                            $text .= '<tr class="not_available">';
                                                        } else {
                                                            $text .= '<tr>';
                                                        }
                                                        $text .= '<td>'.$sound[$i]['products'][$j]->name.'</td>
                                                        <td>'.$sound[$i]['products'][$j]->quantity.'</td>
                                                        <td>'.$sound[$i]['products'][$j]->available_quantity.'</td>
                                                        <td>'.$sound[$i]['products'][$j]->description.'</td>
                                                        <td>
                                                            <select class="form-control" id="quantity_'.$sound[$i]['products'][$j]->product_id.'" name="quantity_'.$sound[$i]['products'][$j]->product_id.'">';
                                                                $av = $sound[$i]['products'][$j]->available_quantity;
                                                                for($x=0; $x<=$av; $x++) {
                                                                    $text .= '<option value = "'.$x.'">'.$x.'</option>';
                                                                }
                                                        $text .= '</td>
                                                        </tr>';
                                                    }
                                                    $text .= '</tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>';
                                    if ($i == 0) {
                                        $text .= '</div>';
                                    } else {
                                        $text .= '</div>';
                                    }
                                 }
                            $text .= '</div>
                        </div>
                        <div id="light" class="tab-pane fade panel_eq">
                            <ul class="nav nav-tabs">';
                                for($i=0; $i<count($light); $i++) {
                                    if($i==0) {
                                        $text .= '<li class="active"><a data-toggle="pill" href="#category'.$light[0]['category_id'].'">'.$light[0]['category'].'</a></li>';
                                    } else {
                                        $text .= '<li><a data-toggle="pill" href="#category'.$light[$i]['category_id'].'">'.$light[$i]['category'].'</a></li>';
                                    }
                                }
                            $text .= '</ul>
                            <div class="tab-content">';
                                for($i=0; $i<count($light); $i++) {
                                    if ($i == 0) {
                                        $text .= '<div id="category'.$light[0]['category_id'].'" class="tab-pane fade in active">';
                                    } else {
                                        $text .= '<div id="category'.$light[$i]['category_id'].'" class="tab-pane fade">';
                                    }
                                $text .= '<div class="panel panel-default">
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Nazwa</th>
                                                        <th>Ilość</th>
                                                        <th>Dostępność</th>
                                                        <th>Opis</th>
                                                        <th>Ilość do dodania</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>';
                                                    for($j=0; $j<count($light[$i]['products']); $j++) {
                                                        if($light[$i]['products'][$j]->available_quantity == 0) {
                                                            $text .= '<tr class="not_available">';
                                                        } else {
                                                            $text .= '<tr>';
                                                        }
                                                        $text .= '<td>'.$light[$i]['products'][$j]->name.'</td>
                                                        <td>'.$light[$i]['products'][$j]->quantity.'</td>
                                                        <td>'.$light[$i]['products'][$j]->available_quantity.'</td>
                                                        <td>'.$light[$i]['products'][$j]->description.'</td>
                                                        <td>
                                                            <select class="form-control" id="quantity_'.$light[$i]['products'][$j]->product_id.'" name="quantity_'.$light[$i]['products'][$j]->product_id.'">';
                                                                $av = $light[$i]['products'][$j]->available_quantity;
                                                                for($x=0; $x<=$av; $x++) {
                                                                    $text .= '<option value = "'.$x.'">'.$x.'</option>';
                                                                }
                                                        $text .= '</td>
                                                        </tr>';
                                                    }
                                                    $text .= '</tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>';
                                   if ($i == 0) {
                                        $text .= '</div>';
                                    } else {
                                        $text .= '</div>';
                                    }
                                }
                            $text .= '</div>
                        </div>';
            header('Content-Type: application/json');
            echo json_encode($text);
            exit;
        }

        public function add() {

            $this->session_model->check_session_no_red();

            $categories = $this->equipment_model->get_equipment_categories();

            $data = array(
                'categories' => $categories,
            );

            $this->twig->display('/pages/add_equipment', $data);
        }

        public function edit_equipment($id) {

            $this->session_model->check_session_no_red();

            $this->form_validation->set_rules('name', 'Nazwa', 'required');
            $this->form_validation->set_rules('quantity', 'Ilość', 'required');
            $this->form_validation->set_rules('description', 'Opis', 'required');
            $this->form_validation->set_rules('category', 'Kategoria', 'required');

            if ($this->form_validation->run() == FALSE) {
                redirect('/equipment/edit/'.$id.'');
            } else {
                $eq = $this->equipment_model->get_equipment_data($id);

                if($eq->available == $eq->quantity || $this->input->post('quantity') < $eq->available) {
                    $available = $this->input->post('quantity');
                } else {
                    $available = $eq->available;
                }

                $data = array(
                    'name' => $this->input->post('name'),
                    'quantity' => $this->input->post('quantity'),
                    'available' => $available,
                    'description' => $this->input->post('description'),
                    'category_id' => $this->input->post('category'),
                );
                $this->db->where('product_id', $id);
                $result = $this->db->update('products', $data);

                if($result == true) {
                    $msg = array(
                        'success' => true,
                        'message' => 'Pomyślnie edytowano',
                    );
                } else {
                    $msg = array(
                        'success' => false,
                        'message' => 'Nie udało się zedytować',
                    );
                }

                $this->session->set_tempdata('message', $msg, 10);

                redirect('/equipment/edit/'.$id.'');
            }
        }

        public function add_equipment() {

            $this->session_model->check_session_no_red();

            $this->form_validation->set_rules('name', 'Nazwa', 'required');
            $this->form_validation->set_rules('quantity', 'Ilość', 'required');
            $this->form_validation->set_rules('description', 'Opis', 'required');
            $this->form_validation->set_rules('category', 'Kategoria', 'required');

            if ($this->form_validation->run() == FALSE) {
                redirect('/equipment/add');
            } else {

                $data = array(
                    'name' => $this->input->post('name'),
                    'quantity' => $this->input->post('quantity'),
                    'available' => $this->input->post('quantity'),
                    'description' => $this->input->post('description'),
                    'category_id' => $this->input->post('category'),
                );

                $result = $this->db->insert('products', $data);

                if($result == true) {
                    $msg = array(
                        'success' => true,
                        'message' => 'Pomyślnie dodano',
                    );
                } else {
                    $msg = array(
                        'success' => false,
                        'message' => 'Nie udało się dodać',
                    );
                }

                $this->session->set_tempdata('message', $msg, 10);

                redirect('/equipment');
            }
        }

        public function delete_equipment($id) {

            $this->session_model->check_session_no_red();

            $equipment = $this->equipment_model->get_equipment_data($id);

            if($equipment == false) {
                redirect('/equipment');
            } else {
                $this->db->where('product_id', $id);
                $result = $this->db->delete('products');

                if($result == true) {
                    $msg = array(
                        'success' => true,
                        'message' => 'Pomyślnie usunięto rekord',
                    );
                } else {
                    $msg = array(
                        'success' => false,
                        'message' => 'Nie udało się usunąć rekordu',
                    );
                }

                $this->session->set_tempdata('message', $msg, 10);

                redirect('/equipment');
            }
        }

    }
    
?>