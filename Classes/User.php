<?php

namespace Source\Lib;

class User
{
    /** @var array */
    public array $data;

    /** @var string */
    private string $mail;

    public string $name;

    /**@var int */
    private int $id;

    /**
     * User constructor.
     * @param int $id
     * @param string $name
     * @param string $mail
     */
    public function __construct(int $id, string $name, string $mail)
    {
        $this->data[$id] = [
            "name" => (is_string($name) ? $name : null),
            "mail" => (filter_var($mail, FILTER_VALIDATE_EMAIL) ? $mail : null)
        ];

        $this->id = $id;
        $this->mail = $mail;
        $this->name = $name;
    }

    /**
     * @param int $id
     * @param $value
     * @param $name
     */
    public function setData(int $id, $value, $name)
    {
        $this->data[$id] += [$value => $name];
    }


    /**
     * @param int $id
     * @param $value
     */
    public function removeData(int $id, $value)
    {
        unset($this->data[$id][$value]);
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    public function getValue(int $id, string $value): ?string
    {
        if (isset($this->getData()[$id][$value])) {
            return $this->getData()[$id][$value];
        }

        var_dump(false);
        return null;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return array|null
     */
    public function getRelease(): ?array
    {
        return [];
    }
}