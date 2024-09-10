<?php

declare(strict_types=1);

class Article {
    protected string $title;
    protected string $text;

    public function __construct(string $title, string $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function getInfo() : string
    {
        return '<b><h1>' . $this->title . '</h1></b>' . '<br><br>' . $this->text . '<br>';
    }

}


class Ad extends Article {

       public function getInfo() : string
    {
        return '<br>' . '<h1>' . strtoupper($this->title) . '</h1>'  . '<br>' . strtoupper($this->text) . '<br>';
    }
}

class Vacancies extends Article {
  public function getInfo() : string
  {
    return '<br><h2>' . $this->title . '</h2><br>' . $this->text . '<br><h3>APPLY NOW!</h3>' ;
  }
}

$article1 = new Article('Article 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad delectus, impedit, dicta at praesentium numquam aliquid provident voluptatibus hic odio quaerat, consequatur fugiat? Debitis tenetur fugit culpa soluta quidem facere!
Est molestias sequi voluptatibus omnis quibusdam nemo, deserunt ipsam dolorum, magni beatae iusto quidem praesentium voluptas maiores pariatur magnam molestiae placeat mollitia corporis voluptates architecto ducimus adipisci itaque tempora? Nesciunt.');
echo $article1->getInfo();

$article2 = new Article('Article 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad delectus, impedit, dicta at praesentium numquam aliquid provident voluptatibus hic odio quaerat, consequatur fugiat? Debitis tenetur fugit culpa soluta quidem facere!
Est molestias sequi voluptatibus omnis quibusdam nemo, deserunt ipsam dolorum, magni beatae iusto quidem praesentium voluptas maiores pariatur magnam molestiae placeat mollitia corporis voluptates architecto ducimus adipisci itaque tempora? Nesciunt.');
echo $article2->getInfo();

$ad1 = new Ad('AD 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sapiente delectus facilis voluptates et hic odio maxime laudantium? Eum iusto consectetur praesentium aut culpa eligendi blanditiis nam. Velit, necessitatibus saepe.' );
echo $ad1->getInfo();

$vacancy1 = new Vacancies('Job Description', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est soluta excepturi quo cumque? Rem nesciunt ipsum non dolor, et nobis, tenetur harum, enim dolorum quisquam aperiam officiis quo ipsam obcaecati!
Earum laborum dolor repellat veniam. Nesciunt voluptatibus hic corporis id pariatur delectus, natus nulla quasi molestias aspernatur aliquam, iure iste quibusdam cumque doloremque, quidem earum. Esse, cum. Accusamus, facere explicabo?');
echo $vacancy1->getInfo();


$magazine = array($article1, $article2, $ad1, $vacancy1);
foreach ($magazine as $x) {
    echo $x->getInfo();
}
