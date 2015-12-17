<?php namespace IrcBot\Commands;

class AirStreamAsNumber implements Command
{
    /**
     * @return string
     */
    public function trigger()
    {
        return "!ping";
    }

    /**
     * @param array $args
     * @return string
     */
    public function run($args = [])
    {
        $cmd = 'ping -n 1 $args[0]';
        $output = shell_exec($cmd);
        return $output;


    }
}