<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList154;
use Ribal\Onix\CodeList\CodeList156;
use Ribal\Onix\CodeList\CodeList157;

class CitedContent
{

    /**
     * CitedContent
     *
     * @var \Ribal\Onix\CodeList\CodeList156
     */
    protected $CitedContent;

    /**
     * ContentAudience
     *
     * @var \Ribal\Onix\CodeList\CodeList154
     */
    protected $ContentAudience;

    /**
     * SourceType
     *
     * @var \Ribal\Onix\CodeList\CodeList157
     */
    protected $SourceType;

    /**
     * SourceTitle
     *
     * @var string
     */
    protected $SourceTitle;

    /**
     * CitationNote
     *
     * @var string
     */
    protected $CitationNote;

    /**
     * ResourceLink
     *
     * @var string
     */
    protected $ResourceLink;

    /**
     * ContentDate
     *
     * @var ContentDate
     */
    protected $ContentDate;

    /**
     * Set CitedContent
     *
     * @param CodeList156 $CitedContent
     * @return void
     */
    public function setCitedContent(CodeList156 $CitedContent)
    {
        $this->CitedContent = $CitedContent;
    }

    /**
     * Set ContentAudience
     *
     * @param CodeList154 $ContentAudience
     * @return void
     */
    public function setContentAudience(CodeList154 $ContentAudience)
    {
        $this->ContentAudience = $ContentAudience;
    }

    /**
     * Set SourceType
     *
     * @param CodeList157 $SourceType
     * @return void
     */
    public function setSourceType(CodeList157 $SourceType)
    {
        $this->SourceType = $SourceType;
    }

    /**
     * Set SourceTitle
     *
     * @param string $SourceTitle
     * @return void
     */
    public function setSourceTitle(string $SourceTitle)
    {
        $this->SourceTitle = $SourceTitle;
    }

    /**
     * Set CitationNote
     *
     * @param string $CitationNote
     * @return void
     */
    public function setCitationNote(string $CitationNote)
    {
        $this->CitationNote = $CitationNote;
    }

    /**
     * Set ResourceLink
     *
     * @param string $ResourceLink
     * @return void
     */
    public function setResourceLink(string $ResourceLink)
    {
        $this->ResourceLink = $ResourceLink;
    }

    /**
     * Set ContentDate
     *
     * @param ContentDate $ContentDate
     * @return void
     */
    public function setContentDate(ContentDate $ContentDate)
    {
        $this->ContentDate = $ContentDate;
    }

    /**
     * Get CitedContent
     *
     * @return \Ribal\Onix\CodeList\CodeList
     */
    public function getCitedContent()
    {
        return $this->CitedContent;
    }

    /**
     * Get ContentAudience
     *
     * @return \Ribal\Onix\CodeList\CodeList
     */
    public function getContentAudience()
    {
        return $this->ContentAudience;
    }

    /**
     * Get SourceType
     *
     * @return \Ribal\Onix\CodeList\CodeList
     */
    public function getSourceType()
    {
        return $this->SourceType;
    }

    /**
     * Get SourceTitle
     *
     * @return string
     */
    public function getSourceTitle()
    {
        return $this->SourceTitle;
    }

    /**
     * Get CitationNote
     *
     * @return string
     */
    public function getCitationNote()
    {
        return $this->CitationNote;
    }

    /**
     * Get ResourceLink
     *
     * @return string
     */
    public function getResourceLink()
    {
        return $this->ResourceLink;
    }

    /**
     * Get ContentDate
     *
     * @return ContentDate
     */
    public function getContentDate()
    {
        return $this->ContentDate;
    }

}
