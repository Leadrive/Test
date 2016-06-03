# Test
Test OctoberCMS conditions bug

After install the plugin, in the backend menu, you can find "Test", click the "Test" button, will display the demo list.
The table leadrive_test_demo have two records, because the bug, the list is empty.

In the table leadrive_test_config, I put three records
        Config::create(['id' => 1, 'field_name' => 'type_one', 'name' => 'Type_One_1', 'deleted_at' => null]);
        Config::create(['id' => 2, 'field_name' => 'type_one', 'name' => 'Type_One_2', 'deleted_at' => '2016-06-03 14:35:12']);
        Config::create(['id' => 1, 'field_name' => 'type_two', 'name' => 'Type_Two_1', 'deleted_at' => null]);
id = 1, will have two records, so use the field_name to know.

    public $belongsTo = [
        'type' => ['Leadrive\Test\Models\Config', 
            'conditions' => 'field_name = "type_one"'
            //'scope' => 'isTypeOne'
            ],
    ];

The list SQL is:
SELECT `leadrive_test_demo`.*, (
SELECT name
FROM `leadrive_test_config`
WHERE `leadrive_test_demo`.`type_id` = `leadrive_test_config`.`id`) AS `type_name`
FROM `leadrive_test_demo`
ORDER BY `id` DESC

Because the id = 1, will return two record, so this SQL will cause error:
Subquery returns more than 1 row

So you can see the list result is empty.

If you delete the id = 1, field_name = 'type_two' record, the plugin will working ok.

Also, if you use the 'scope' => 'isTypeOne', it will cause error too.
