<?php namespace Orchestra\Avatar;

abstract class Handler
{
    /**
     * Configuration.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Name of the handler.
     *
     * @var string
     */
    protected $name;

    /**
     * Identifier which normally would be the email address.
     *
     * @var string
     */
    protected $identifier;

    /**
     *
     * @var string
     */
    protected $size;

    /**
     * Construct a new Avatar handler.
     *
     * @param array  $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Set identifier from user object.
     *
     * @param  \Illuminate\Database\Eloquent\Model|object  $user
     * @param  string  $attribute
     * @return $this
     */
    public function setIdentifierFromUser($user, $attribute = 'email')
    {
        return $this->setIdentifier($user->getAttribute($attribute));
    }

    /**
     * Render the avatar.
     *
     * @return string
     */
    abstract public function render();

    /**
     * Get user identifier.
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set user identifier.
     *
     * @param  string  $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * Get size.
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set size.
     *
     * @param  string  $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Large size.
     *
     * @return $this
     */
    public function large()
    {
        return $this->setSize('large');
    }

    /**
     * Medium size.
     *
     * @return $this
     */
    public function medium()
    {
        return $this->setSize('medium');
    }

    /**
     * Small size.
     *
     * @return $this
     */
    public function small()
    {
        return $this->setSize('small');
    }

    /**
     * Render the avatar.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }
}