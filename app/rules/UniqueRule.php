<?php
namespace PHPMVC\rules;
use PHPMVC\lib\Database;
use Rakit\Validation\MissingRequiredParameterException;
use Rakit\Validation\Rule;

class UniqueRule extends Rule
{
    protected $message = ":attribute :value has been used";

    protected $fillableParams = ['table', 'column', 'except'];

    protected $pdo;

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * @throws MissingRequiredParameterException
     */
    public function check($value): bool
    {
        // make sure required parameters exists
        $this->requireParameters(['table', 'column']);

        // getting parameters
        $column = $this->parameter('column');
        $table = $this->parameter('table');
        $except = $this->parameter('except');

        if ($except AND $except == $value) {
            return true;
        }

        // do query
        $this->db->query("select count(*) as count from `{$table}` where `{$column}` = :value");
        $this->db->bindValues(':value', $value);
        $this->db->execute();
        $data = $this->db->resultSet();

        // true for valid, false for invalid
        return intval($data[0]->count) === 0;
    }
}
