<?php

namespace spec\Lakion\SyliusElasticSearchBundle\Search\Elastic\Factory\Query;

use Lakion\SyliusElasticSearchBundle\Search\Elastic\Factory\Query\EmptyCriteria;
use Lakion\SyliusElasticSearchBundle\Search\Elastic\Factory\Query\QueryFactoryInterface;
use ONGR\ElasticsearchDSL\Query\MatchAllQuery;
use PhpSpec\ObjectBehavior;

/**
 * @author Arkadiusz Krakowiak <arkadiusz.krakowiak@lakion.com>
 */
final class EmptyCriteriaSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(EmptyCriteria::class);
    }

    function it_is_query_factory()
    {
        $this->shouldImplement(QueryFactoryInterface::class);
    }

    function it_creates_query()
    {
        $this->create()->shouldBeLike(new MatchAllQuery());
    }
}
