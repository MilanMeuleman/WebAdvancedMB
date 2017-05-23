<?php

namespace View;
class EventJsonView implements View
{

    public function show(array $data)
    {
        header('Content-Type: application/json');

        if (isset($data['Event'])) {
            $Event = $data['Event'];
            //var_dump($Event);
            if (sizeof($Event)<=1){
                echo json_encode(['EventID' => $Event->getEventId(), 'PersoonID' => $Event->getPersoonId(), 'StartDatum' => $Event->getStartDatum(), 'EindDatum' => $Event->getEindDatum(), 'beschrijving' => $Event->getBeschrijving()]);
            }else{
                foreach ($Event as $show){
                    echo json_encode(['EventID' => $show->getEventId(), 'PersoonID' => $show->getPersoonId(), 'StartDatum' => $show->getStartDatum(), 'EindDatum' => $show->getEindDatum(), 'beschrijving' => $show->getBeschrijving()]);
                }
            }

        } else if (isset($data['Persoon'])) {
            $Event = $data['Persoon'];
            echo json_encode(['PersoonID' => $Event->getPersoonID(), 'PersoonNaam' => $Event->getPersoonNaam()]);
        } else {
            echo '{}';
        }
    }

}