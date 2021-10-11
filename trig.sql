CREATE OR REPLACE FUNCTION setTime()
RETURNS TRIGGER AS $trig$
DECLARE sub integer;
DECLARE days integer;
	BEGIN
		SELECT subscription_id as number1 INTO sub FROM money WHERE client_id = OLD.client_id ORDER BY id LIMIT 1;
        SELECT term as term1 into days FROM subscriptions where id = sub;
		UPDATE clients SET next_payment = NOW() + (interval '1' DAY * days) WHERE id = OLD.client_id;
		RETURN NEW;
	END;
$trig$ LANGUAGE plpgsql;

CREATE TRIGGER nextPayment AFTER INSERT ON client_trainer FOR EACH ROW EXECUTE PROCEDURE setTime();
