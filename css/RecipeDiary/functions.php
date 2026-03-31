<?php

// 管理画面｜カスタム投稿の追加
function register_custom_post_type(){

    //カスタム投稿タイプの追加
    $ary_taxonomy_type_option = [
        "labels" => [
            "name" => "レシピ",           //管理画面に表示する名前（複数形）
            "singular_name" => "レシピ",      //管理画面に表示する名前（単数形）
            "add_new_item" => "レシピを追加",
            "not_found" => "レシピが見つかりません。",
            "all_items" => "レシピ一覧",
            "not_found_in_trash" => "ゴミ箱にレシピはありません",
        ],
        "public" => true,                   //公開するかどうか
        "has_archive" => true,              //アーカイブを有効にするかどうか
        "menu_position" => 5,               //管理画面のメニュー表示位置
        "menu_icon" => "dashicons-food",    //管理画面のカスタム投稿のアイコン設定
        "supports"  => [                    //編集画面で利用できる機能
            "title",
            "editor",
            "thumbnail"
        ],
        "taxonomies" => ["recipe_category"],  //利用するタクソノミー
        "show_in_rest" => true,             //ブロックエディタで選択可能かどうか
    ];
    //register_post_type("カスタム投稿タイプ名", "カスタム投稿タイプの設定");
    register_post_type("recipe", $ary_taxonomy_type_option);

    //カスタムタクソノミーの追加
    $ary_taxonomy_option = [
        "labels" => [
            "name" => "レシピカテゴリー",           //管理画面に表示する名前（複数形）
            "singular_name" => "レシピカテゴリー",      //管理画面に表示する名前（単数形）
        ],
        "hierarchical" => true,      //階層構造にするかどうか
        "show_admin_column" => true, //一覧表示にするかどうか
        "show_in_rest" => true,     //ブロックエディタで選択可能かどうか
    ];
    // register_taxonomy("カスタムタクソノミーの名称", "カスタムタクソノミーを使用するオブジェクトタイプ", "カスタムタクソノミーの設定");
    register_taxonomy("recipe_category", "recipe", $ary_taxonomy_option);

}
add_action("init", "register_custom_post_type");






// 管理画面｜投稿の名前変更
function change_menu_label()
{
    global $menu;
    global $submenu;
    $name = 'お知らせ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name . '一覧';
    $submenu['edit.php'][10][0] = '新しい' . $name;
}
function change_object_label()
{
    global $wp_post_types;
    $name = 'お知らせ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name . 'の新規追加';
    $labels->edit_item = $name . 'の編集';
    $labels->new_item = '新規' . $name;
    $labels->view_item = $name . 'を表示';
    $labels->search_items = $name . 'を検索';
    $labels->not_found = $name . 'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'change_object_label');
add_action('admin_menu', 'change_menu_label');


// 管理画面｜アイキャッチ画像の設定領域を表示
function theme_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');

//pタグやbrタグでの保管をやめさせる
add_filter('wpcf7_autop_or_not', '__return_false');
remove_filter('the_content', 'wpautop');