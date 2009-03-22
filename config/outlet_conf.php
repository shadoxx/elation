<?
require_once("outlet/Outlet.php");

Outlet::init(array(
  'connection' => array(
    'dsn' => 'mysql:host=localhost;dbname=boxeebox',
    'username' => 'boxeebox',
    'password' => 'b0x33b0x',
    'dialect' => 'mysql'
  ),
  'classes' => array(
    "Blog" => array(
      'table' => 'blog',
      'props' => array(
        'blogname' => array('blogname', 'varchar', array('pk' => true)),
        'title' => array('title', 'varchar'),
        'subtitle' => array('subtitle', 'varchar'),
        'owner' => array('owner', 'varchar')
      ),
      'form' => array(
        'subject' => array('type' => 'input', 'name' => 'subject', 'label' => 'Subject', 'value' => '(no subject)'),
        'content' => array('type' => 'textarea', 'name' => 'content', 'label' => 'Content'),
      ),
      'associations' => array(
        array('one-to-many', 'BlogPost', array('key' => 'blogname'))
      )
    ),
    "BlogPost" => array(
      'table' => 'blog_post',
      'props' => array(
        'blogpostid' => array('blogpostid', 'varchar', array('pk' => true)),
        'blogname' => array('blogname', 'varchar'),
        'subject' => array('subject', 'varchar'),
        'content' => array('content', 'text'),
        'timestamp' => array('timestamp', 'datetime')
      ),
      'associations' => array(
        array('many-to-one', 'Blog', array('key' => 'blogname'))
      )
    )

  )
));

/*
<outlet>
  <connection dsn="mysql:host=localhost;dbname=supercritical" username="supercritical" password="aCp_n9ll" dialect="mysql" />
  <classes>
    <Blog>
      <table>blog</table>
      <props>
        <blogid dbname="blogid" type="int">
          <pk>true</pk>
          <autoIncrement>true</autoIncrement>
        </blogid>
        <name dbname="blogname" type="varchar">
        <title dbname="title" type="varchar">
        <subtitle dbname="subtitle" type="varchar">
        <owner dbname="owner" type="int">
      </props>
      <associations>
        <one-to-many with="BlogPost"><key>blogid</key></one-to-many>
      </associations>
    </Blog>
  </classes>
</outlet>
 */
