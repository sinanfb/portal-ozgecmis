<?php

use yii\db\Migration;

/**
 * Class m181226_205600_ozgecmis
 */
class m190101_134809_ozgecmis extends Migration
{
    /**
     * {@inheritdoc}
     */
 public function Up()
    {
        
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $TABLE_NAME = 'ozgecmis';
        $this->createTable($TABLE_NAME, [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()
            
            ], $tableOptions);


        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $TABLE_NAME = 'soruekle';
        $this->createTable($TABLE_NAME, [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()
                  
        ], $tableOptions);


         $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $TABLE_NAME = 'sablon';
        $this->createTable($TABLE_NAME, [
            'id' => $this->primaryKey(),
            'isim' => "ENUM('true', 'false')",
            'soyisim' => "ENUM('true', 'false')",
            'adres' => "ENUM('true', 'false')",
            'cep_telefonu' => "ENUM('true', 'false')",
            'email' => "ENUM('true', 'false')",
            'egitim_bilgileri' => "ENUM('true', 'false')",
            'is_deneyimleri' => "ENUM('true', 'false')",
            'sertifikalar' => "ENUM('true', 'false')",
            'yabancı_diller' => "ENUM('true', 'false')",
            'kısaca_kendinizi_tanıtın' => "ENUM('true', 'false')"
        ], $tableOptions);


        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $TABLE_NAME = 'soru';
        $this->createTable($TABLE_NAME, [
            'id' => $this->primaryKey(),
            'isim' => $this->string(255)->notNull(),
            'soyisim' => $this->string(255)->notNull(),
            'dogum_tarihi' => $this->dateTime()->notNull(),
            'adres' => $this->string(255)->notNull(),
            'cep_telefonu' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'egitim_bilgileri' => $this->text()->notNull(),
            'is_deneyimleri' =>$this->text()->notNull(),
            'sertifikalar' => $this->text()->notNull(),
            'yabancı_diller' => $this->text()->notNull(),
            'kısaca_kendinizi_tanıtın' => $this->text()->notNull()

            
        ], $tableOptions);


    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $TABLE_NAME = 'soru';
        $this->dropTable($TABLE_NAME);
        $TABLE_NAME = 'ozgecmis';
        $this->dropTable($TABLE_NAME);
        $TABLE_NAME = 'soruekle';
        $this->dropTable($TABLE_NAME);
        $TABLE_NAME = 'sablon';
        $this->dropTable($TABLE_NAME);

        
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181226_205600_ozgecmis cannot be reverted.\n";

        return false;
    }
    */
}
