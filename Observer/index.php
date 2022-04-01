<?php

interface Subscriber {

    public function update($postId);
}

class FemmeActuelle {

    private $subcribers = array();
    private $post;

    public function registerSubscriber(Subscriber $subs) {
        $this->subscribers[] = $subs;
        echo "inscription ajoutée \n" ;
    }

    public function notify() {
        foreach ($this->subscribers as $subcriber) {
            $subcriber->update($this->post);
        }
    }

    public function publishPost($post) {
        $this->post = $post;
        $this->notify();
    }
        
}

class UpdateSubs implements Subscriber {
    public function update($postId) {
        echo 'nouveau post avec id : '.$postId.' publié';
    }
}

//client
$publisher = new FemmeActuelle();
$souscris = new UpdateSubs();

$publisher->registerSubscriber($souscris);
$publisher->publishPost(12);
