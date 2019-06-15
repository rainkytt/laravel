<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel Users Blades Language Lines
    |--------------------------------------------------------------------------
    */

    'showing-all-users'     => 'Kõik kasutajad',
    'users-menu-alt'        => 'Kasutajate haldamine',
    'create-new-user'       => 'Loo uus kasutaja',
    'show-deleted-users'    => 'Kuva kustutatud kasutajad',
    'editing-user'          => 'Kasutaja: :name',
    'showing-user'          => 'Kasutaja: :name',
    'showing-user-title'    => 'Kasutaja profiil: :name',

    'users-table' => [
        'caption'   => '{1} :userscount kasutajat kokku|[2,*] :userscount total users',
        'id'        => 'ID',
        'name'      => 'Nimi',
        'email'     => 'Email',
        'role'      => 'Roll',
        'created'   => 'Loodud',
        'updated'   => 'Uuendatud',
        'actions'   => 'Tegevused',
        'updated'   => 'Uuendatud',
    ],

    'buttons' => [
        'create-new'    => '<span class="hidden-xs hidden-sm">Uus kasutaja</span>',
        'delete'        => '<i class="far fa-trash-alt fa-fw" aria-hidden="true"></i>  <span class="hidden-xs hidden-sm">Kustuta</span><span class="hidden-xs hidden-sm hidden-md"> kasutaja</span>',
        'show'          => '<i class="fas fa-eye fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Vaata</span><span class="hidden-xs hidden-sm hidden-md"> kasutajat</span>',
        'edit'          => '<i class="fas fa-pencil-alt fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Muuda</span><span class="hidden-xs hidden-sm hidden-md"> kasutaja</span>',
        'back-to-users' => 'Kõik kasutajad<span class="hidden-sm hidden-xs"></span><span class="hidden-xs"></span>',
        'back-to-user'  => 'Tagasi kasutaja juurde<span class="hidden-xs"></span>',
        'delete-user'   => '<i class="far fa-trash-alt fa-fw" aria-hidden="true"></i>  <span class="hidden-xs">Kustuta</span><span class="hidden-xs"> kasutaja</span>',
        'edit-user'     => '<i class="fas fa-pencil-alt fa-fw" aria-hidden="true"></i> <span class="hidden-xs">Muuda</span><span class="hidden-xs"> kasutajat</span>',
    ],

    'tooltips' => [
        'delete'        => 'Kustuta',
        'show'          => 'Vaata',
        'edit'          => 'Muuda',
        'create-new'    => 'Loo uus kasutaja',
        'back-users'    => '',
        'email-user'    => 'Email :user',
        'submit-search' => 'Otsi kasutajat',
        'clear-search'  => 'Tühjenda otsingu tulemus',
    ],

    'messages' => [
        'userNameTaken'          => 'Kasutajanimi on võetud',
        'userNameRequired'       => 'Kasutajanimi on puudu',
        'fNameRequired'          => 'Eesnimi on puudu',
        'lNameRequired'          => 'Perenimi on puudu',
        'emailRequired'          => 'Email on puudu',
        'emailInvalid'           => 'Email on vale',
        'passwordRequired'       => 'Parool on puudu',
        'PasswordMin'            => 'Parool peab sisaldama vähemalt 8 märki',
        'PasswordMax'            => 'Parooli suurim lubatud pikkus on 20',
        'captchaRequire'         => 'Captcha on puudu',
        'CaptchaWrong'           => 'Vale captcha, palun proovi uuesti',
        'roleRequired'           => 'Kasutaja roll on puudu',
        'user-creation-success'  => 'Kasutaja on edukalt loodud!',
        'update-user-success'    => 'Kasutaja uuendatud!',
        'delete-success'         => 'kasutaja kustutatud',
        'cannot-delete-yourself' => 'Sa ei saa ennast kustutada!',
    ],

    'show-user' => [
        'id'                => 'Kasutaja ID',
        'name'              => 'Kasutajanimi',
        'email'             => '<span class="hidden-xs">Kasutaja </span>Email',
        'role'              => 'Kasutaja roll',
        'created'           => 'Loodud <span class="hidden-xs"></span>',
        'updated'           => 'Uuendatud <span class="hidden-xs"></span>',
        'labelRole'         => 'Kasutaja roll',
        'labelAccessLevel'  => '<span class="hidden-xs">Kasutaja</span> ligipääsu tasand|<span class="hidden-xs">Kasutaja</span> ligipääsu tasandid',
    ],

    'search'  => [
        'title'         => 'Otsingu tulemused',
        'found-footer'  => ' tulemus(t) leitud',
        'no-results'    => 'Tulemused puuduvad',
    ],
];
