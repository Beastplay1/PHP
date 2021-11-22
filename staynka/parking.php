<?php 
class parking{
	public $car_count;
	public $truck_count;
	public $cars = [];
	public $trucks= [];
	public $tickets=[];
	function __construct($c,$t){
		$this->car_count=$c;
		$this->truck_count=$t;

	}
	public function place_free(machine $m){
		foreach ($this->cars as $key => $val){
			if($val==$m){
				$m->ticket->end_time=date("Y F d h:i:s",time()+rand(100,500));
				 $this->tickets[]=$m->ticket;
				 unset($this->cars[$key]);
			}
		}
		foreach ($this->trucks as $key => $val){
			if($val==$m){
				$m->ticket->end_time=date("Y F d h:i:s",time()+rand(100,500));
				$this->tickets[]=$m->ticket;
				unset($this->trucks[$key]);
			}
		}
	}
	public function give_place(machine $m){
		if(get_class($m)=='car'){
			if(count($this->cars)<$this->car_count){
			   $this->cars[]=$m;
			   return new ticket($m->number,date("Y F d h:i:s"),false,"car");
			}elseif(count($this->trucks)<$this->truck_count){
				$this->trucks[]=$m;
				return new ticket($m->number,date("Y F d h:i:s"),false,"car");
			}
		}else{
			if(count($this->trucks)<$this->truck_count){
				$this->trucks[]=$m;
				return new ticket($m->number,date("Y F d h:i:s"),false,"truck");

				}
			}
		}
		
}
